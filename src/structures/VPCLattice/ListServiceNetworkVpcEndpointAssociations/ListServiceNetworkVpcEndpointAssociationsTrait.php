<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations;

trait ListServiceNetworkVpcEndpointAssociationsTrait
{
    /**
     * @param ListServiceNetworkVpcEndpointAssociationsRequest $args
     * @return ListServiceNetworkVpcEndpointAssociationsResponse
     */
    public function listServiceNetworkVpcEndpointAssociations(ListServiceNetworkVpcEndpointAssociationsRequest $args)
    {
        $result = parent::listServiceNetworkVpcEndpointAssociations($args->toArray());
        return new ListServiceNetworkVpcEndpointAssociationsResponse($result->toArray());
    }
}
