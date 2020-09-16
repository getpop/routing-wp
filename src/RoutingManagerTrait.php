<?php

declare(strict_types=1);

namespace PoP\RoutingWP;

use WP_Query;

trait RoutingManagerTrait
{
    private ?WP_Query $query = null;

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
