<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryIngestionJobs;

trait ListDataAutomationLibraryIngestionJobsTrait
{
    /**
     * @param ListDataAutomationLibraryIngestionJobsRequest $args
     * @return ListDataAutomationLibraryIngestionJobsResponse
     */
    public function listDataAutomationLibraryIngestionJobs(ListDataAutomationLibraryIngestionJobsRequest $args)
    {
        $result = parent::listDataAutomationLibraryIngestionJobs($args->toArray());
        return new ListDataAutomationLibraryIngestionJobsResponse($result->toArray());
    }
}
