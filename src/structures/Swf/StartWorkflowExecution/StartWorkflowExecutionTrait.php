<?php

namespace Sunaoka\Aws\Structures\Swf\StartWorkflowExecution;

trait StartWorkflowExecutionTrait
{
    /**
     * @param StartWorkflowExecutionRequest $args
     * @return StartWorkflowExecutionResponse
     */
    public function startWorkflowExecution(StartWorkflowExecutionRequest $args)
    {
        $result = parent::startWorkflowExecution($args->toArray());
        return new StartWorkflowExecutionResponse($result->toArray());
    }
}
