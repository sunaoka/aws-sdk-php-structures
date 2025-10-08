<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs;

trait ListSyncJobsTrait
{
    /**
     * @param ListSyncJobsRequest $args
     * @return ListSyncJobsResponse
     */
    public function listSyncJobs(ListSyncJobsRequest $args)
    {
        $result = parent::listSyncJobs($args->toArray());
        return new ListSyncJobsResponse($result->toArray());
    }
}
