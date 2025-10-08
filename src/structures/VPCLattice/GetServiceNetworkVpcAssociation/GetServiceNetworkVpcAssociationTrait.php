<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkVpcAssociation;

trait GetServiceNetworkVpcAssociationTrait
{
    /**
     * @param GetServiceNetworkVpcAssociationRequest $args
     * @return GetServiceNetworkVpcAssociationResponse
     */
    public function getServiceNetworkVpcAssociation(GetServiceNetworkVpcAssociationRequest $args)
    {
        $result = parent::getServiceNetworkVpcAssociation($args->toArray());
        return new GetServiceNetworkVpcAssociationResponse($result->toArray());
    }
}
