<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowExecution;

trait GetWorkflowExecutionTrait
{
    /**
     * @param GetWorkflowExecutionRequest $args
     * @return GetWorkflowExecutionResponse
     */
    public function getWorkflowExecution(GetWorkflowExecutionRequest $args)
    {
        $result = parent::getWorkflowExecution($args->toArray());
        return new GetWorkflowExecutionResponse($result->toArray());
    }
}
