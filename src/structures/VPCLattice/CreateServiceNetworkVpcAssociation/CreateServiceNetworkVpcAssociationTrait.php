<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

trait CreateServiceNetworkVpcAssociationTrait
{
    /**
     * @param CreateServiceNetworkVpcAssociationRequest $args
     * @return CreateServiceNetworkVpcAssociationResponse
     */
    public function createServiceNetworkVpcAssociation(CreateServiceNetworkVpcAssociationRequest $args)
    {
        $result = parent::createServiceNetworkVpcAssociation($args->toArray());
        return new CreateServiceNetworkVpcAssociationResponse($result->toArray());
    }
}
