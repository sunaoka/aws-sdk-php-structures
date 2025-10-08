<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource;

trait UpdateBridgeSourceTrait
{
    /**
     * @param UpdateBridgeSourceRequest $args
     * @return UpdateBridgeSourceResponse
     */
    public function updateBridgeSource(UpdateBridgeSourceRequest $args)
    {
        $result = parent::updateBridgeSource($args->toArray());
        return new UpdateBridgeSourceResponse($result->toArray());
    }
}
