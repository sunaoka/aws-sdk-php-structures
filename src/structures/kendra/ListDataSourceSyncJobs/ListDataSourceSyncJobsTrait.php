<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs;

trait ListDataSourceSyncJobsTrait
{
    /**
     * @param ListDataSourceSyncJobsRequest $args
     * @return ListDataSourceSyncJobsResponse
     */
    public function listDataSourceSyncJobs(ListDataSourceSyncJobsRequest $args)
    {
        $result = parent::listDataSourceSyncJobs($args->toArray());
        return new ListDataSourceSyncJobsResponse($result->toArray());
    }
}
