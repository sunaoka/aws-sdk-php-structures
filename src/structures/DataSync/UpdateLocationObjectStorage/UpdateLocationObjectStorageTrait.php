<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage;

trait UpdateLocationObjectStorageTrait
{
    /**
     * @param UpdateLocationObjectStorageRequest $args
     * @return UpdateLocationObjectStorageResponse
     */
    public function updateLocationObjectStorage(UpdateLocationObjectStorageRequest $args)
    {
        $result = parent::updateLocationObjectStorage($args->toArray());
        return new UpdateLocationObjectStorageResponse($result->toArray());
    }
}
