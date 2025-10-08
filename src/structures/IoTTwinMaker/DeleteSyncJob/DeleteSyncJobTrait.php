<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteSyncJob;

trait DeleteSyncJobTrait
{
    /**
     * @param DeleteSyncJobRequest $args
     * @return DeleteSyncJobResponse
     */
    public function deleteSyncJob(DeleteSyncJobRequest $args)
    {
        $result = parent::deleteSyncJob($args->toArray());
        return new DeleteSyncJobResponse($result->toArray());
    }
}
