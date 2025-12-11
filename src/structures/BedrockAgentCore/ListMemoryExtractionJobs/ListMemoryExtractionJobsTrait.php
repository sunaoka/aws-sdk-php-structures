<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs;

trait ListMemoryExtractionJobsTrait
{
    /**
     * @param ListMemoryExtractionJobsRequest $args
     * @return ListMemoryExtractionJobsResponse
     */
    public function listMemoryExtractionJobs(ListMemoryExtractionJobsRequest $args)
    {
        $result = parent::listMemoryExtractionJobs($args->toArray());
        return new ListMemoryExtractionJobsResponse($result->toArray());
    }
}
