<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAdvancedPromptOptimizationJobs;

trait ListAdvancedPromptOptimizationJobsTrait
{
    /**
     * @param ListAdvancedPromptOptimizationJobsRequest $args
     * @return ListAdvancedPromptOptimizationJobsResponse
     */
    public function listAdvancedPromptOptimizationJobs(ListAdvancedPromptOptimizationJobsRequest $args)
    {
        $result = parent::listAdvancedPromptOptimizationJobs($args->toArray());
        return new ListAdvancedPromptOptimizationJobsResponse($result->toArray());
    }
}
