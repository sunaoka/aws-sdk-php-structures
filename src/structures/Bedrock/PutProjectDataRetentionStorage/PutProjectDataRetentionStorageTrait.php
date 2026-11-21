<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutProjectDataRetentionStorage;

trait PutProjectDataRetentionStorageTrait
{
    /**
     * @param PutProjectDataRetentionStorageRequest $args
     * @return PutProjectDataRetentionStorageResponse
     */
    public function putProjectDataRetentionStorage(PutProjectDataRetentionStorageRequest $args)
    {
        $result = parent::putProjectDataRetentionStorage($args->toArray());
        return new PutProjectDataRetentionStorageResponse($result->toArray());
    }
}
