<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopPipelineExecution;

trait StopPipelineExecutionTrait
{
    /**
     * @param StopPipelineExecutionRequest $args
     * @return StopPipelineExecutionResponse
     */
    public function stopPipelineExecution(StopPipelineExecutionRequest $args)
    {
        $result = parent::stopPipelineExecution($args->toArray());
        return new StopPipelineExecutionResponse($result->toArray());
    }
}
