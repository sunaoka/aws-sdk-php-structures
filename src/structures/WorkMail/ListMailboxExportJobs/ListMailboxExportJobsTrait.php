<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxExportJobs;

trait ListMailboxExportJobsTrait
{
    /**
     * @param ListMailboxExportJobsRequest $args
     * @return ListMailboxExportJobsResponse
     */
    public function listMailboxExportJobs(ListMailboxExportJobsRequest $args)
    {
        $result = parent::listMailboxExportJobs($args->toArray());
        return new ListMailboxExportJobsResponse($result->toArray());
    }
}
