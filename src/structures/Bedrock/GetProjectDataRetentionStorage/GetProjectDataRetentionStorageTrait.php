<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetProjectDataRetentionStorage;

trait GetProjectDataRetentionStorageTrait
{
    /**
     * @param GetProjectDataRetentionStorageRequest $args
     * @return GetProjectDataRetentionStorageResponse
     */
    public function getProjectDataRetentionStorage(GetProjectDataRetentionStorageRequest $args)
    {
        $result = parent::getProjectDataRetentionStorage($args->toArray());
        return new GetProjectDataRetentionStorageResponse($result->toArray());
    }
}
