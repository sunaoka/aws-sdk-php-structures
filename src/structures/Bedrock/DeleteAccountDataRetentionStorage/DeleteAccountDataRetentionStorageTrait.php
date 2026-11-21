<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAccountDataRetentionStorage;

trait DeleteAccountDataRetentionStorageTrait
{
    /**
     * @param DeleteAccountDataRetentionStorageRequest $args
     * @return DeleteAccountDataRetentionStorageResponse
     */
    public function deleteAccountDataRetentionStorage(DeleteAccountDataRetentionStorageRequest $args)
    {
        $result = parent::deleteAccountDataRetentionStorage($args->toArray());
        return new DeleteAccountDataRetentionStorageResponse($result->toArray());
    }
}
