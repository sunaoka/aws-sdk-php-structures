<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkVpcAssociation;

trait DeleteServiceNetworkVpcAssociationTrait
{
    /**
     * @param DeleteServiceNetworkVpcAssociationRequest $args
     * @return DeleteServiceNetworkVpcAssociationResponse
     */
    public function deleteServiceNetworkVpcAssociation(DeleteServiceNetworkVpcAssociationRequest $args)
    {
        $result = parent::deleteServiceNetworkVpcAssociation($args->toArray());
        return new DeleteServiceNetworkVpcAssociationResponse($result->toArray());
    }
}
