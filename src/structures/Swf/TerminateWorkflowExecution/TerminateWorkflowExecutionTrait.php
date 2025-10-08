<?php

namespace Sunaoka\Aws\Structures\Swf\TerminateWorkflowExecution;

trait TerminateWorkflowExecutionTrait
{
    /**
     * @param TerminateWorkflowExecutionRequest $args
     * @return void
     */
    public function terminateWorkflowExecution(TerminateWorkflowExecutionRequest $args)
    {
        parent::terminateWorkflowExecution($args->toArray());
    }
}
