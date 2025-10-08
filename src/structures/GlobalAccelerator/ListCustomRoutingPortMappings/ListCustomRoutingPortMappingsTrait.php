<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings;

trait ListCustomRoutingPortMappingsTrait
{
    /**
     * @param ListCustomRoutingPortMappingsRequest $args
     * @return ListCustomRoutingPortMappingsResponse
     */
    public function listCustomRoutingPortMappings(ListCustomRoutingPortMappingsRequest $args)
    {
        $result = parent::listCustomRoutingPortMappings($args->toArray());
        return new ListCustomRoutingPortMappingsResponse($result->toArray());
    }
}
