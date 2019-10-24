<?php
namespace PoP\RoutingWP;
use PoP\Hooks\Facades\HooksAPIFacade;
use PoP\Routing\Natures;
use PoP\Routing\AbstractRoutingManager;

class RoutingManager extends AbstractRoutingManager
{
    use RoutingManagerTrait;

    public function getCurrentNature()
    {
        $this->init();
        if ($this->isStandard()) {
            return Natures::STANDARD;
        } elseif ($this->query->is_home() || $this->query->is_front_page()) {
            return Natures::HOME;
        } elseif ($this->query->is_404()) {
            return Natures::NOTFOUND;
        }

        // Allow plugins to implement their own natures
        return HooksAPIFacade::getInstance()->applyFilters(
            'WPCMSRoutingState:nature',
            parent::getCurrentNature(),
            $this->query
        );
    }
}
