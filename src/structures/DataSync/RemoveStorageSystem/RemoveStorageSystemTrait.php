<?php

namespace Sunaoka\Aws\Structures\DataSync\RemoveStorageSystem;

trait RemoveStorageSystemTrait
{
    /**
     * @param RemoveStorageSystemRequest $args
     * @return RemoveStorageSystemResponse
     */
    public function removeStorageSystem(RemoveStorageSystemRequest $args)
    {
        $result = parent::removeStorageSystem($args->toArray());
        return new RemoveStorageSystemResponse($result->toArray());
    }
}
