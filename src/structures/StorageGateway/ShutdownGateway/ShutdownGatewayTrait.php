<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ShutdownGateway;

trait ShutdownGatewayTrait
{
    /**
     * @param ShutdownGatewayRequest $args
     * @return ShutdownGatewayResponse
     */
    public function shutdownGateway(ShutdownGatewayRequest $args)
    {
        $result = parent::shutdownGateway($args->toArray());
        return new ShutdownGatewayResponse($result->toArray());
    }
}
