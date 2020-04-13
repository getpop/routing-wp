<?php

declare(strict_types=1);

namespace PoP\RoutingWP;
use PoP\Hooks\Facades\HooksAPIFacade;
use PoP\Routing\RouteNatures;
use PoP\Routing\AbstractRoutingManager;

class RoutingManager extends AbstractRoutingManager
{
    use RoutingManagerTrait;

    public function getCurrentNature()
    {
        $this->init();
        if ($this->isStandard()) {
            return RouteNatures::STANDARD;
        } elseif ($this->query->is_home() || $this->query->is_front_page()) {
            return RouteNatures::HOME;
        } elseif ($this->query->is_404()) {
            return RouteNatures::NOTFOUND;
        }

        // Allow plugins to implement their own natures
        return HooksAPIFacade::getInstance()->applyFilters(
            'WPCMSRoutingState:nature',
            parent::getCurrentNature(),
            $this->query
        );
    }
}
