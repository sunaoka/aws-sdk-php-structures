<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowStepExecution;

trait GetWorkflowStepExecutionTrait
{
    /**
     * @param GetWorkflowStepExecutionRequest $args
     * @return GetWorkflowStepExecutionResponse
     */
    public function getWorkflowStepExecution(GetWorkflowStepExecutionRequest $args)
    {
        $result = parent::getWorkflowStepExecution($args->toArray());
        return new GetWorkflowStepExecutionResponse($result->toArray());
    }
}
