<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetSyncJob;

trait GetSyncJobTrait
{
    /**
     * @param GetSyncJobRequest $args
     * @return GetSyncJobResponse
     */
    public function getSyncJob(GetSyncJobRequest $args)
    {
        $result = parent::getSyncJob($args->toArray());
        return new GetSyncJobResponse($result->toArray());
    }
}
