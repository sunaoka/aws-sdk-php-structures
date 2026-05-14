<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAdvancedPromptOptimizationJob;

trait GetAdvancedPromptOptimizationJobTrait
{
    /**
     * @param GetAdvancedPromptOptimizationJobRequest $args
     * @return GetAdvancedPromptOptimizationJobResponse
     */
    public function getAdvancedPromptOptimizationJob(GetAdvancedPromptOptimizationJobRequest $args)
    {
        $result = parent::getAdvancedPromptOptimizationJob($args->toArray());
        return new GetAdvancedPromptOptimizationJobResponse($result->toArray());
    }
}
