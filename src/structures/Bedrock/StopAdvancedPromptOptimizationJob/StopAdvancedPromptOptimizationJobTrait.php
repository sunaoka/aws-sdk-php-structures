<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopAdvancedPromptOptimizationJob;

trait StopAdvancedPromptOptimizationJobTrait
{
    /**
     * @param StopAdvancedPromptOptimizationJobRequest $args
     * @return StopAdvancedPromptOptimizationJobResponse
     */
    public function stopAdvancedPromptOptimizationJob(StopAdvancedPromptOptimizationJobRequest $args)
    {
        $result = parent::stopAdvancedPromptOptimizationJob($args->toArray());
        return new StopAdvancedPromptOptimizationJobResponse($result->toArray());
    }
}
