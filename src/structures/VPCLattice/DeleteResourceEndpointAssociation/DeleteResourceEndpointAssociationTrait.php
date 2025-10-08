<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceEndpointAssociation;

trait DeleteResourceEndpointAssociationTrait
{
    /**
     * @param DeleteResourceEndpointAssociationRequest $args
     * @return DeleteResourceEndpointAssociationResponse
     */
    public function deleteResourceEndpointAssociation(DeleteResourceEndpointAssociationRequest $args)
    {
        $result = parent::deleteResourceEndpointAssociation($args->toArray());
        return new DeleteResourceEndpointAssociationResponse($result->toArray());
    }
}
