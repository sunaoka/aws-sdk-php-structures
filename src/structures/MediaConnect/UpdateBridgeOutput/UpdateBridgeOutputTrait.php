<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeOutput;

trait UpdateBridgeOutputTrait
{
    /**
     * @param UpdateBridgeOutputRequest $args
     * @return UpdateBridgeOutputResponse
     */
    public function updateBridgeOutput(UpdateBridgeOutputRequest $args)
    {
        $result = parent::updateBridgeOutput($args->toArray());
        return new UpdateBridgeOutputResponse($result->toArray());
    }
}
