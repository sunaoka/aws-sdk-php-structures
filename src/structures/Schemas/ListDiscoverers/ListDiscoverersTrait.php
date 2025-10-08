<?php

namespace Sunaoka\Aws\Structures\Schemas\ListDiscoverers;

trait ListDiscoverersTrait
{
    /**
     * @param ListDiscoverersRequest $args
     * @return ListDiscoverersResponse
     */
    public function listDiscoverers(ListDiscoverersRequest $args)
    {
        $result = parent::listDiscoverers($args->toArray());
        return new ListDiscoverersResponse($result->toArray());
    }
}
