<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveBridgeSource;

trait RemoveBridgeSourceTrait
{
    /**
     * @param RemoveBridgeSourceRequest $args
     * @return RemoveBridgeSourceResponse
     */
    public function removeBridgeSource(RemoveBridgeSourceRequest $args)
    {
        $result = parent::removeBridgeSource($args->toArray());
        return new RemoveBridgeSourceResponse($result->toArray());
    }
}
