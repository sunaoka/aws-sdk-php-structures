<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage;

trait CreateLocationObjectStorageTrait
{
    /**
     * @param CreateLocationObjectStorageRequest $args
     * @return CreateLocationObjectStorageResponse
     */
    public function createLocationObjectStorage(CreateLocationObjectStorageRequest $args)
    {
        $result = parent::createLocationObjectStorage($args->toArray());
        return new CreateLocationObjectStorageResponse($result->toArray());
    }
}
