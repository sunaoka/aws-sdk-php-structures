<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateStorage;

trait UpdateStorageTrait
{
    /**
     * @param UpdateStorageRequest $args
     * @return UpdateStorageResponse
     */
    public function updateStorage(UpdateStorageRequest $args)
    {
        $result = parent::updateStorage($args->toArray());
        return new UpdateStorageResponse($result->toArray());
    }
}
