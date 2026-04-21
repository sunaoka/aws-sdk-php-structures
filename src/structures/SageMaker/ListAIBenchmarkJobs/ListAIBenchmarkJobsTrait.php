<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIBenchmarkJobs;

trait ListAIBenchmarkJobsTrait
{
    /**
     * @param ListAIBenchmarkJobsRequest $args
     * @return ListAIBenchmarkJobsResponse
     */
    public function listAIBenchmarkJobs(ListAIBenchmarkJobsRequest $args)
    {
        $result = parent::listAIBenchmarkJobs($args->toArray());
        return new ListAIBenchmarkJobsResponse($result->toArray());
    }
}
