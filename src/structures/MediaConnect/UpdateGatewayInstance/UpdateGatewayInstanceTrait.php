<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateGatewayInstance;

trait UpdateGatewayInstanceTrait
{
    /**
     * @param UpdateGatewayInstanceRequest $args
     * @return UpdateGatewayInstanceResponse
     */
    public function updateGatewayInstance(UpdateGatewayInstanceRequest $args)
    {
        $result = parent::updateGatewayInstance($args->toArray());
        return new UpdateGatewayInstanceResponse($result->toArray());
    }
}
