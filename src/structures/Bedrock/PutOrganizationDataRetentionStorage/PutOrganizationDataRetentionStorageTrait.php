<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutOrganizationDataRetentionStorage;

trait PutOrganizationDataRetentionStorageTrait
{
    /**
     * @param PutOrganizationDataRetentionStorageRequest $args
     * @return PutOrganizationDataRetentionStorageResponse
     */
    public function putOrganizationDataRetentionStorage(PutOrganizationDataRetentionStorageRequest $args)
    {
        $result = parent::putOrganizationDataRetentionStorage($args->toArray());
        return new PutOrganizationDataRetentionStorageResponse($result->toArray());
    }
}
