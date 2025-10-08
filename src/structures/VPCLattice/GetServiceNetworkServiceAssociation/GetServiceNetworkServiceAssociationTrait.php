<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkServiceAssociation;

trait GetServiceNetworkServiceAssociationTrait
{
    /**
     * @param GetServiceNetworkServiceAssociationRequest $args
     * @return GetServiceNetworkServiceAssociationResponse
     */
    public function getServiceNetworkServiceAssociation(GetServiceNetworkServiceAssociationRequest $args)
    {
        $result = parent::getServiceNetworkServiceAssociation($args->toArray());
        return new GetServiceNetworkServiceAssociationResponse($result->toArray());
    }
}
