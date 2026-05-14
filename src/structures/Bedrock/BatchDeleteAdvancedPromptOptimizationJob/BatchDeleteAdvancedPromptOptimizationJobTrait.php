<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteAdvancedPromptOptimizationJob;

trait BatchDeleteAdvancedPromptOptimizationJobTrait
{
    /**
     * @param BatchDeleteAdvancedPromptOptimizationJobRequest $args
     * @return BatchDeleteAdvancedPromptOptimizationJobResponse
     */
    public function batchDeleteAdvancedPromptOptimizationJob(BatchDeleteAdvancedPromptOptimizationJobRequest $args)
    {
        $result = parent::batchDeleteAdvancedPromptOptimizationJob($args->toArray());
        return new BatchDeleteAdvancedPromptOptimizationJobResponse($result->toArray());
    }
}
