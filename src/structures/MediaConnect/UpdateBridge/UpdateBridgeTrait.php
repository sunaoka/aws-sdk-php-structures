<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge;

trait UpdateBridgeTrait
{
    /**
     * @param UpdateBridgeRequest $args
     * @return UpdateBridgeResponse
     */
    public function updateBridge(UpdateBridgeRequest $args)
    {
        $result = parent::updateBridge($args->toArray());
        return new UpdateBridgeResponse($result->toArray());
    }
}
