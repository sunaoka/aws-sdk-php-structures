<?php

namespace Sunaoka\Aws\Structures\SesV2\ListExportJobs;

trait ListExportJobsTrait
{
    /**
     * @param ListExportJobsRequest $args
     * @return ListExportJobsResponse
     */
    public function listExportJobs(ListExportJobsRequest $args)
    {
        $result = parent::listExportJobs($args->toArray());
        return new ListExportJobsResponse($result->toArray());
    }
}
