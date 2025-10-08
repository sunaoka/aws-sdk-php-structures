<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RetryStageExecution;

trait RetryStageExecutionTrait
{
    /**
     * @param RetryStageExecutionRequest $args
     * @return RetryStageExecutionResponse
     */
    public function retryStageExecution(RetryStageExecutionRequest $args)
    {
        $result = parent::retryStageExecution($args->toArray());
        return new RetryStageExecutionResponse($result->toArray());
    }
}
