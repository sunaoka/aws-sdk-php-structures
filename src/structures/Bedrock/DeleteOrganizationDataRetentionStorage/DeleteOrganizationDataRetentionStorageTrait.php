<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteOrganizationDataRetentionStorage;

trait DeleteOrganizationDataRetentionStorageTrait
{
    /**
     * @param DeleteOrganizationDataRetentionStorageRequest $args
     * @return DeleteOrganizationDataRetentionStorageResponse
     */
    public function deleteOrganizationDataRetentionStorage(DeleteOrganizationDataRetentionStorageRequest $args)
    {
        $result = parent::deleteOrganizationDataRetentionStorage($args->toArray());
        return new DeleteOrganizationDataRetentionStorageResponse($result->toArray());
    }
}
