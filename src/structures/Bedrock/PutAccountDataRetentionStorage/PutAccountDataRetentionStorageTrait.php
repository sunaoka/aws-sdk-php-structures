<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutAccountDataRetentionStorage;

trait PutAccountDataRetentionStorageTrait
{
    /**
     * @param PutAccountDataRetentionStorageRequest $args
     * @return PutAccountDataRetentionStorageResponse
     */
    public function putAccountDataRetentionStorage(PutAccountDataRetentionStorageRequest $args)
    {
        $result = parent::putAccountDataRetentionStorage($args->toArray());
        return new PutAccountDataRetentionStorageResponse($result->toArray());
    }
}
