<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkServiceAssociation;

trait CreateServiceNetworkServiceAssociationTrait
{
    /**
     * @param CreateServiceNetworkServiceAssociationRequest $args
     * @return CreateServiceNetworkServiceAssociationResponse
     */
    public function createServiceNetworkServiceAssociation(CreateServiceNetworkServiceAssociationRequest $args)
    {
        $result = parent::createServiceNetworkServiceAssociation($args->toArray());
        return new CreateServiceNetworkServiceAssociationResponse($result->toArray());
    }
}
