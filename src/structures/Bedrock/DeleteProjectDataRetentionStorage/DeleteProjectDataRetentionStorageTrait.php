<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteProjectDataRetentionStorage;

trait DeleteProjectDataRetentionStorageTrait
{
    /**
     * @param DeleteProjectDataRetentionStorageRequest $args
     * @return DeleteProjectDataRetentionStorageResponse
     */
    public function deleteProjectDataRetentionStorage(DeleteProjectDataRetentionStorageRequest $args)
    {
        $result = parent::deleteProjectDataRetentionStorage($args->toArray());
        return new DeleteProjectDataRetentionStorageResponse($result->toArray());
    }
}
