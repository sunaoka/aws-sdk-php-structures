<?php

namespace Sunaoka\Aws\Structures\SageMaker\RetryPipelineExecution;

trait RetryPipelineExecutionTrait
{
    /**
     * @param RetryPipelineExecutionRequest $args
     * @return RetryPipelineExecutionResponse
     */
    public function retryPipelineExecution(RetryPipelineExecutionRequest $args)
    {
        $result = parent::retryPipelineExecution($args->toArray());
        return new RetryPipelineExecutionResponse($result->toArray());
    }
}
