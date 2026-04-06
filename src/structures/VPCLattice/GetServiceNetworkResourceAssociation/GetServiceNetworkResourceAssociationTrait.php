<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkResourceAssociation;

trait GetServiceNetworkResourceAssociationTrait
{
    /**
     * @param GetServiceNetworkResourceAssociationRequest $args
     * @return GetServiceNetworkResourceAssociationResponse
     */
    public function getServiceNetworkResourceAssociation(GetServiceNetworkResourceAssociationRequest $args)
    {
        $result = parent::getServiceNetworkResourceAssociation($args->toArray());
        return new GetServiceNetworkResourceAssociationResponse($result->toArray());
    }
}
