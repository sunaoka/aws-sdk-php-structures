<?php

namespace Sunaoka\Aws\Structures\kendra\StopDataSourceSyncJob;

trait StopDataSourceSyncJobTrait
{
    /**
     * @param StopDataSourceSyncJobRequest $args
     * @return void
     */
    public function stopDataSourceSyncJob(StopDataSourceSyncJobRequest $args)
    {
        parent::stopDataSourceSyncJob($args->toArray());
    }
}
