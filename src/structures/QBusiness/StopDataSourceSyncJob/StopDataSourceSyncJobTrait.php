<?php

namespace Sunaoka\Aws\Structures\QBusiness\StopDataSourceSyncJob;

trait StopDataSourceSyncJobTrait
{
    /**
     * @param StopDataSourceSyncJobRequest $args
     * @return StopDataSourceSyncJobResponse
     */
    public function stopDataSourceSyncJob(StopDataSourceSyncJobRequest $args)
    {
        $result = parent::stopDataSourceSyncJob($args->toArray());
        return new StopDataSourceSyncJobResponse($result->toArray());
    }
}
