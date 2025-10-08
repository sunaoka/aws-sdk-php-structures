<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGateway;

trait UpdateDirectConnectGatewayTrait
{
    /**
     * @param UpdateDirectConnectGatewayRequest $args
     * @return UpdateDirectConnectGatewayResponse
     */
    public function updateDirectConnectGateway(UpdateDirectConnectGatewayRequest $args)
    {
        $result = parent::updateDirectConnectGateway($args->toArray());
        return new UpdateDirectConnectGatewayResponse($result->toArray());
    }
}
