<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineExecution;

trait UpdatePipelineExecutionTrait
{
    /**
     * @param UpdatePipelineExecutionRequest $args
     * @return UpdatePipelineExecutionResponse
     */
    public function updatePipelineExecution(UpdatePipelineExecutionRequest $args)
    {
        $result = parent::updatePipelineExecution($args->toArray());
        return new UpdatePipelineExecutionResponse($result->toArray());
    }
}
