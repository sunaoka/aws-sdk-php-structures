<?php

namespace Sunaoka\Aws\Structures\Swf\CountClosedWorkflowExecutions;

trait CountClosedWorkflowExecutionsTrait
{
    /**
     * @param CountClosedWorkflowExecutionsRequest $args
     * @return CountClosedWorkflowExecutionsResponse
     */
    public function countClosedWorkflowExecutions(CountClosedWorkflowExecutionsRequest $args)
    {
        $result = parent::countClosedWorkflowExecutions($args->toArray());
        return new CountClosedWorkflowExecutionsResponse($result->toArray());
    }
}
