<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRExportJobs;

trait ListFHIRExportJobsTrait
{
    /**
     * @param ListFHIRExportJobsRequest $args
     * @return ListFHIRExportJobsResponse
     */
    public function listFHIRExportJobs(ListFHIRExportJobsRequest $args)
    {
        $result = parent::listFHIRExportJobs($args->toArray());
        return new ListFHIRExportJobsResponse($result->toArray());
    }
}
