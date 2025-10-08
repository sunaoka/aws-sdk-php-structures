<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterGatewayInstance;

trait DeregisterGatewayInstanceTrait
{
    /**
     * @param DeregisterGatewayInstanceRequest $args
     * @return DeregisterGatewayInstanceResponse
     */
    public function deregisterGatewayInstance(DeregisterGatewayInstanceRequest $args)
    {
        $result = parent::deregisterGatewayInstance($args->toArray());
        return new DeregisterGatewayInstanceResponse($result->toArray());
    }
}
