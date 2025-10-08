<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRImportJobs;

trait ListFHIRImportJobsTrait
{
    /**
     * @param ListFHIRImportJobsRequest $args
     * @return ListFHIRImportJobsResponse
     */
    public function listFHIRImportJobs(ListFHIRImportJobsRequest $args)
    {
        $result = parent::listFHIRImportJobs($args->toArray());
        return new ListFHIRImportJobsResponse($result->toArray());
    }
}
