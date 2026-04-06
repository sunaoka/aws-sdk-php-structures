<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkResourceAssociation;

trait DeleteServiceNetworkResourceAssociationTrait
{
    /**
     * @param DeleteServiceNetworkResourceAssociationRequest $args
     * @return DeleteServiceNetworkResourceAssociationResponse
     */
    public function deleteServiceNetworkResourceAssociation(DeleteServiceNetworkResourceAssociationRequest $args)
    {
        $result = parent::deleteServiceNetworkResourceAssociation($args->toArray());
        return new DeleteServiceNetworkResourceAssociationResponse($result->toArray());
    }
}
