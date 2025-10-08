<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGatewayAssociation;

trait UpdateDirectConnectGatewayAssociationTrait
{
    /**
     * @param UpdateDirectConnectGatewayAssociationRequest $args
     * @return UpdateDirectConnectGatewayAssociationResponse
     */
    public function updateDirectConnectGatewayAssociation(UpdateDirectConnectGatewayAssociationRequest $args)
    {
        $result = parent::updateDirectConnectGatewayAssociation($args->toArray());
        return new UpdateDirectConnectGatewayAssociationResponse($result->toArray());
    }
}
