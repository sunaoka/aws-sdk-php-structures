<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetExportJobs;

trait ListReadSetExportJobsTrait
{
    /**
     * @param ListReadSetExportJobsRequest $args
     * @return ListReadSetExportJobsResponse
     */
    public function listReadSetExportJobs(ListReadSetExportJobsRequest $args)
    {
        $result = parent::listReadSetExportJobs($args->toArray());
        return new ListReadSetExportJobsResponse($result->toArray());
    }
}
