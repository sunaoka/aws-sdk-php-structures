<?php

namespace Sunaoka\Aws\Structures\Swf\RequestCancelWorkflowExecution;

trait RequestCancelWorkflowExecutionTrait
{
    /**
     * @param RequestCancelWorkflowExecutionRequest $args
     * @return void
     */
    public function requestCancelWorkflowExecution(RequestCancelWorkflowExecutionRequest $args)
    {
        parent::requestCancelWorkflowExecution($args->toArray());
    }
}
