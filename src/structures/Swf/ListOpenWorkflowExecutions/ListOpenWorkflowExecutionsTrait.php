<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions;

trait ListOpenWorkflowExecutionsTrait
{
    /**
     * @param ListOpenWorkflowExecutionsRequest $args
     * @return ListOpenWorkflowExecutionsResponse
     */
    public function listOpenWorkflowExecutions(ListOpenWorkflowExecutionsRequest $args)
    {
        $result = parent::listOpenWorkflowExecutions($args->toArray());
        return new ListOpenWorkflowExecutionsResponse($result->toArray());
    }
}
