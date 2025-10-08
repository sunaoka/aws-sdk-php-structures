<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGateway;

trait DeleteDirectConnectGatewayTrait
{
    /**
     * @param DeleteDirectConnectGatewayRequest $args
     * @return DeleteDirectConnectGatewayResponse
     */
    public function deleteDirectConnectGateway(DeleteDirectConnectGatewayRequest $args)
    {
        $result = parent::deleteDirectConnectGateway($args->toArray());
        return new DeleteDirectConnectGatewayResponse($result->toArray());
    }
}
