<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions;

trait ListWorkflowExecutionsTrait
{
    /**
     * @param ListWorkflowExecutionsRequest $args
     * @return ListWorkflowExecutionsResponse
     */
    public function listWorkflowExecutions(ListWorkflowExecutionsRequest $args)
    {
        $result = parent::listWorkflowExecutions($args->toArray());
        return new ListWorkflowExecutionsResponse($result->toArray());
    }
}
