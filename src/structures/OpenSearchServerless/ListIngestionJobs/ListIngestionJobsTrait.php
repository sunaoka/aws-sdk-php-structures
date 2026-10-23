<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListIngestionJobs;

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
