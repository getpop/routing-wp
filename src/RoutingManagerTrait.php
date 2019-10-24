<?php
namespace PoP\RoutingWP;

trait RoutingManagerTrait
{
    private $query;

    private function init()
    {
        if (is_null($this->query)) {
            global $wp_query;
            $this->query = $wp_query;
        }
    }

    private function isStandard()
    {
        // If we passed query args STANDARD_NATURE, then it's a route
        return !empty(
            array_intersect(
                $this->query->query_vars,
                WPQueries::STANDARD_NATURE
            )
        );
    }
}
