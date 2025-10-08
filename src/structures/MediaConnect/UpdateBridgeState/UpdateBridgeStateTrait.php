<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeState;

trait UpdateBridgeStateTrait
{
    /**
     * @param UpdateBridgeStateRequest $args
     * @return UpdateBridgeStateResponse
     */
    public function updateBridgeState(UpdateBridgeStateRequest $args)
    {
        $result = parent::updateBridgeState($args->toArray());
        return new UpdateBridgeStateResponse($result->toArray());
    }
}
