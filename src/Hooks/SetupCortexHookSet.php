<?php
namespace PoP\RoutingWP\Hooks;

use PoP\Engine\Hooks\AbstractHookSet;
use Brain\Cortex\Route\RouteCollectionInterface;
use Brain\Cortex\Route\QueryRoute;
use PoP\RoutingWP\WPQueries;
use PoP\Routing\Facades\RoutingManagerFacade;

class SetupCortexHookSet extends AbstractHookSet
{
    protected function init()
    {
        $this->hooksAPI->addAction(
            'cortex.routes',
            [$this, 'setupCortex'],
            1
        );
    }

    public function setupCortex(RouteCollectionInterface $routes) {
        $routingManager = RoutingManagerFacade::getInstance();
        foreach ($routingManager->getRoutes() as $route) {
            $routes->addRoute(new QueryRoute(
                $route,
                function (array $matches) {
                    return WPQueries::STANDARD_NATURE;
                }
            ));
        }
    }
}