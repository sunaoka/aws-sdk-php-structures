<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions;

trait ListWorkflowStepExecutionsTrait
{
    /**
     * @param ListWorkflowStepExecutionsRequest $args
     * @return ListWorkflowStepExecutionsResponse
     */
    public function listWorkflowStepExecutions(ListWorkflowStepExecutionsRequest $args)
    {
        $result = parent::listWorkflowStepExecutions($args->toArray());
        return new ListWorkflowStepExecutionsResponse($result->toArray());
    }
}
