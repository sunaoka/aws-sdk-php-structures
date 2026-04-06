<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobs;

trait ListScanJobsTrait
{
    /**
     * @param ListScanJobsRequest $args
     * @return ListScanJobsResponse
     */
    public function listScanJobs(ListScanJobsRequest $args)
    {
        $result = parent::listScanJobs($args->toArray());
        return new ListScanJobsResponse($result->toArray());
    }
}
