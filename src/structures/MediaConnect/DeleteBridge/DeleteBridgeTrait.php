<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteBridge;

trait DeleteBridgeTrait
{
    /**
     * @param DeleteBridgeRequest $args
     * @return DeleteBridgeResponse
     */
    public function deleteBridge(DeleteBridgeRequest $args)
    {
        $result = parent::deleteBridge($args->toArray());
        return new DeleteBridgeResponse($result->toArray());
    }
}
