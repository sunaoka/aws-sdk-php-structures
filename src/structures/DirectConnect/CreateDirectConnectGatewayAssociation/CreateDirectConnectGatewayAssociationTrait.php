<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociation;

trait CreateDirectConnectGatewayAssociationTrait
{
    /**
     * @param CreateDirectConnectGatewayAssociationRequest $args
     * @return CreateDirectConnectGatewayAssociationResponse
     */
    public function createDirectConnectGatewayAssociation(CreateDirectConnectGatewayAssociationRequest $args)
    {
        $result = parent::createDirectConnectGatewayAssociation($args->toArray());
        return new CreateDirectConnectGatewayAssociationResponse($result->toArray());
    }
}
