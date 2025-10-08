<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddWorkingStorage;

trait AddWorkingStorageTrait
{
    /**
     * @param AddWorkingStorageRequest $args
     * @return AddWorkingStorageResponse
     */
    public function addWorkingStorage(AddWorkingStorageRequest $args)
    {
        $result = parent::addWorkingStorage($args->toArray());
        return new AddWorkingStorageResponse($result->toArray());
    }
}
