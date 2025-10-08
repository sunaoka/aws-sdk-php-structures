<?php

namespace Sunaoka\Aws\Structures\kendra\StartDataSourceSyncJob;

trait StartDataSourceSyncJobTrait
{
    /**
     * @param StartDataSourceSyncJobRequest $args
     * @return StartDataSourceSyncJobResponse
     */
    public function startDataSourceSyncJob(StartDataSourceSyncJobRequest $args)
    {
        $result = parent::startDataSourceSyncJob($args->toArray());
        return new StartDataSourceSyncJobResponse($result->toArray());
    }
}
