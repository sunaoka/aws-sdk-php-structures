<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListWorkflows;

trait ListWorkflowsTrait
{
    /**
     * @param ListWorkflowsRequest $args
     * @return ListWorkflowsResponse
     */
    public function listWorkflows(ListWorkflowsRequest $args)
    {
        $result = parent::listWorkflows($args->toArray());
        return new ListWorkflowsResponse($result->toArray());
    }
}
