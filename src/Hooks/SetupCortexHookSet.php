<?php
namespace PoP\RoutingWP\Hooks;

use PoP\Engine\Hooks\AbstractHookSet;
use Brain\Cortex\Route\RouteCollectionInterface;
use Brain\Cortex\Route\QueryRoute;
use PoP\RoutingWP\WPQueries;
use PoP\Routing\RouteManagerFacade;

class SetupCortexHookSet extends AbstractHookSet
{
    protected function init()
    {
        $this->hooksAPI->addAction(
            'cortex.routes',
            [$this, 'setupCortext'],
            1
        );
    }

    public function setupCortex(RouteCollectionInterface $routes) {
        $routeManager = RouteManagerFacade::getInstance();
        foreach ($routeManager->getRoutes() as $route) {
            $routes->addRoute(new QueryRoute(
                $route,
                function (array $matches) {
                    return WPQueries::STANDARD_NATURE;
                }
            ));
        }
    }
}
