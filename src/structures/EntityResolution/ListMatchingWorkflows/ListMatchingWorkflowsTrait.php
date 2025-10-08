<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingWorkflows;

trait ListMatchingWorkflowsTrait
{
    /**
     * @param ListMatchingWorkflowsRequest $args
     * @return ListMatchingWorkflowsResponse
     */
    public function listMatchingWorkflows(ListMatchingWorkflowsRequest $args)
    {
        $result = parent::listMatchingWorkflows($args->toArray());
        return new ListMatchingWorkflowsResponse($result->toArray());
    }
}
