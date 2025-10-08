<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations;

trait ListServiceNetworkVpcAssociationsTrait
{
    /**
     * @param ListServiceNetworkVpcAssociationsRequest $args
     * @return ListServiceNetworkVpcAssociationsResponse
     */
    public function listServiceNetworkVpcAssociations(ListServiceNetworkVpcAssociationsRequest $args)
    {
        $result = parent::listServiceNetworkVpcAssociations($args->toArray());
        return new ListServiceNetworkVpcAssociationsResponse($result->toArray());
    }
}
