<?php

namespace Sunaoka\Aws\Structures\Swf\SignalWorkflowExecution;

trait SignalWorkflowExecutionTrait
{
    /**
     * @param SignalWorkflowExecutionRequest $args
     * @return void
     */
    public function signalWorkflowExecution(SignalWorkflowExecutionRequest $args)
    {
        parent::signalWorkflowExecution($args->toArray());
    }
}
