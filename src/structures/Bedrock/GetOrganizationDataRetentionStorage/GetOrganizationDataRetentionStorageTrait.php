<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetOrganizationDataRetentionStorage;

trait GetOrganizationDataRetentionStorageTrait
{
    /**
     * @param GetOrganizationDataRetentionStorageRequest $args
     * @return GetOrganizationDataRetentionStorageResponse
     */
    public function getOrganizationDataRetentionStorage(GetOrganizationDataRetentionStorageRequest $args)
    {
        $result = parent::getOrganizationDataRetentionStorage($args->toArray());
        return new GetOrganizationDataRetentionStorageResponse($result->toArray());
    }
}
