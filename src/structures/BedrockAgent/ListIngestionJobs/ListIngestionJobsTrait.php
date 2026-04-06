<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs;

trait ListIngestionJobsTrait
{
    /**
     * @param ListIngestionJobsRequest $args
     * @return ListIngestionJobsResponse
     */
    public function listIngestionJobs(ListIngestionJobsRequest $args)
    {
        $result = parent::listIngestionJobs($args->toArray());
        return new ListIngestionJobsResponse($result->toArray());
    }
}
