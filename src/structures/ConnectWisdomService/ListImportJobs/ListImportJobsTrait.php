<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListImportJobs;

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
