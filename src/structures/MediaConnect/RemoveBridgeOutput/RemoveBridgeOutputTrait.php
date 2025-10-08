<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveBridgeOutput;

trait RemoveBridgeOutputTrait
{
    /**
     * @param RemoveBridgeOutputRequest $args
     * @return RemoveBridgeOutputResponse
     */
    public function removeBridgeOutput(RemoveBridgeOutputRequest $args)
    {
        $result = parent::removeBridgeOutput($args->toArray());
        return new RemoveBridgeOutputResponse($result->toArray());
    }
}
