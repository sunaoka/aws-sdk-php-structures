<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations;

trait ListResourceEndpointAssociationsTrait
{
    /**
     * @param ListResourceEndpointAssociationsRequest $args
     * @return ListResourceEndpointAssociationsResponse
     */
    public function listResourceEndpointAssociations(ListResourceEndpointAssociationsRequest $args)
    {
        $result = parent::listResourceEndpointAssociations($args->toArray());
        return new ListResourceEndpointAssociationsResponse($result->toArray());
    }
}
