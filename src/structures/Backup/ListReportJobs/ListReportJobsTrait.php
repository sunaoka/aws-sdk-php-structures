<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs;

trait ListReportJobsTrait
{
    /**
     * @param ListReportJobsRequest $args
     * @return ListReportJobsResponse
     */
    public function listReportJobs(ListReportJobsRequest $args)
    {
        $result = parent::listReportJobs($args->toArray());
        return new ListReportJobsResponse($result->toArray());
    }
}
