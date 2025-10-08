<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociation;

trait DeleteDirectConnectGatewayAssociationTrait
{
    /**
     * @param DeleteDirectConnectGatewayAssociationRequest $args
     * @return DeleteDirectConnectGatewayAssociationResponse
     */
    public function deleteDirectConnectGatewayAssociation(DeleteDirectConnectGatewayAssociationRequest $args)
    {
        $result = parent::deleteDirectConnectGatewayAssociation($args->toArray());
        return new DeleteDirectConnectGatewayAssociationResponse($result->toArray());
    }
}
