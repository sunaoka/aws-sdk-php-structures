<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateSyncJob;

trait CreateSyncJobTrait
{
    /**
     * @param CreateSyncJobRequest $args
     * @return CreateSyncJobResponse
     */
    public function createSyncJob(CreateSyncJobRequest $args)
    {
        $result = parent::createSyncJob($args->toArray());
        return new CreateSyncJobResponse($result->toArray());
    }
}
