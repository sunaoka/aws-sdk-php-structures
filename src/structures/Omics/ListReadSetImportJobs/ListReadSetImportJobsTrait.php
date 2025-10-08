<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetImportJobs;

trait ListReadSetImportJobsTrait
{
    /**
     * @param ListReadSetImportJobsRequest $args
     * @return ListReadSetImportJobsResponse
     */
    public function listReadSetImportJobs(ListReadSetImportJobsRequest $args)
    {
        $result = parent::listReadSetImportJobs($args->toArray());
        return new ListReadSetImportJobsResponse($result->toArray());
    }
}
