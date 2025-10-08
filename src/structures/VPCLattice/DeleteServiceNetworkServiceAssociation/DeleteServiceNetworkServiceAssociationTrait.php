<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkServiceAssociation;

trait DeleteServiceNetworkServiceAssociationTrait
{
    /**
     * @param DeleteServiceNetworkServiceAssociationRequest $args
     * @return DeleteServiceNetworkServiceAssociationResponse
     */
    public function deleteServiceNetworkServiceAssociation(DeleteServiceNetworkServiceAssociationRequest $args)
    {
        $result = parent::deleteServiceNetworkServiceAssociation($args->toArray());
        return new DeleteServiceNetworkServiceAssociationResponse($result->toArray());
    }
}
