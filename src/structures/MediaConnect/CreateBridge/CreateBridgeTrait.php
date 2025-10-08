<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge;

trait CreateBridgeTrait
{
    /**
     * @param CreateBridgeRequest $args
     * @return CreateBridgeResponse
     */
    public function createBridge(CreateBridgeRequest $args)
    {
        $result = parent::createBridge($args->toArray());
        return new CreateBridgeResponse($result->toArray());
    }
}
