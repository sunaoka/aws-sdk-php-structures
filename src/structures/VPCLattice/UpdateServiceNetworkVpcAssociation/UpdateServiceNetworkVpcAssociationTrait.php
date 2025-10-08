<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetworkVpcAssociation;

trait UpdateServiceNetworkVpcAssociationTrait
{
    /**
     * @param UpdateServiceNetworkVpcAssociationRequest $args
     * @return UpdateServiceNetworkVpcAssociationResponse
     */
    public function updateServiceNetworkVpcAssociation(UpdateServiceNetworkVpcAssociationRequest $args)
    {
        $result = parent::updateServiceNetworkVpcAssociation($args->toArray());
        return new UpdateServiceNetworkVpcAssociationResponse($result->toArray());
    }
}
