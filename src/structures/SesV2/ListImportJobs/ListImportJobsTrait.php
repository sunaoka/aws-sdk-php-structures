<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs;

trait ListImportJobsTrait
{
    /**
     * @param ListImportJobsRequest $args
     * @return ListImportJobsResponse
     */
    public function listImportJobs(ListImportJobsRequest $args)
    {
        $result = parent::listImportJobs($args->toArray());
        return new ListImportJobsResponse($result->toArray());
    }
}
