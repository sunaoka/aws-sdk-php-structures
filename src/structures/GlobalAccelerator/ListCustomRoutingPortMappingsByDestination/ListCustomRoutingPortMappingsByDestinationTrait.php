<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination;

trait ListCustomRoutingPortMappingsByDestinationTrait
{
    /**
     * @param ListCustomRoutingPortMappingsByDestinationRequest $args
     * @return ListCustomRoutingPortMappingsByDestinationResponse
     */
    public function listCustomRoutingPortMappingsByDestination(ListCustomRoutingPortMappingsByDestinationRequest $args)
    {
        $result = parent::listCustomRoutingPortMappingsByDestination($args->toArray());
        return new ListCustomRoutingPortMappingsByDestinationResponse($result->toArray());
    }
}
