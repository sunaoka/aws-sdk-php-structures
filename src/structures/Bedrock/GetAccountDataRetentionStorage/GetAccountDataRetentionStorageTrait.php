<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAccountDataRetentionStorage;

trait GetAccountDataRetentionStorageTrait
{
    /**
     * @param GetAccountDataRetentionStorageRequest $args
     * @return GetAccountDataRetentionStorageResponse
     */
    public function getAccountDataRetentionStorage(GetAccountDataRetentionStorageRequest $args)
    {
        $result = parent::getAccountDataRetentionStorage($args->toArray());
        return new GetAccountDataRetentionStorageResponse($result->toArray());
    }
}
