<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkResourceAssociation;

trait CreateServiceNetworkResourceAssociationTrait
{
    /**
     * @param CreateServiceNetworkResourceAssociationRequest $args
     * @return CreateServiceNetworkResourceAssociationResponse
     */
    public function createServiceNetworkResourceAssociation(CreateServiceNetworkResourceAssociationRequest $args)
    {
        $result = parent::createServiceNetworkResourceAssociation($args->toArray());
        return new CreateServiceNetworkResourceAssociationResponse($result->toArray());
    }
}
