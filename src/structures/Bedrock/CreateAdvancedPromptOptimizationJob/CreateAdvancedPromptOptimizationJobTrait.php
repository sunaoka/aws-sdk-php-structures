<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAdvancedPromptOptimizationJob;

trait CreateAdvancedPromptOptimizationJobTrait
{
    /**
     * @param CreateAdvancedPromptOptimizationJobRequest $args
     * @return CreateAdvancedPromptOptimizationJobResponse
     */
    public function createAdvancedPromptOptimizationJob(CreateAdvancedPromptOptimizationJobRequest $args)
    {
        $result = parent::createAdvancedPromptOptimizationJob($args->toArray());
        return new CreateAdvancedPromptOptimizationJobResponse($result->toArray());
    }
}
