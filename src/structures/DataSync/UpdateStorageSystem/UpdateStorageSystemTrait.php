<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateStorageSystem;

trait UpdateStorageSystemTrait
{
    /**
     * @param UpdateStorageSystemRequest $args
     * @return UpdateStorageSystemResponse
     */
    public function updateStorageSystem(UpdateStorageSystemRequest $args)
    {
        $result = parent::updateStorageSystem($args->toArray());
        return new UpdateStorageSystemResponse($result->toArray());
    }
}
