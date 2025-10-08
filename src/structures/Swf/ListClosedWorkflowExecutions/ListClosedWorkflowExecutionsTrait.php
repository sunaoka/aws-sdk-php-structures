<?php

namespace Sunaoka\Aws\Structures\Swf\ListClosedWorkflowExecutions;

trait ListClosedWorkflowExecutionsTrait
{
    /**
     * @param ListClosedWorkflowExecutionsRequest $args
     * @return ListClosedWorkflowExecutionsResponse
     */
    public function listClosedWorkflowExecutions(ListClosedWorkflowExecutionsRequest $args)
    {
        $result = parent::listClosedWorkflowExecutions($args->toArray());
        return new ListClosedWorkflowExecutionsResponse($result->toArray());
    }
}
