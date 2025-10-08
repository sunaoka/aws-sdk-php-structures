<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowStepGroups;

trait ListWorkflowStepGroupsTrait
{
    /**
     * @param ListWorkflowStepGroupsRequest $args
     * @return ListWorkflowStepGroupsResponse
     */
    public function listWorkflowStepGroups(ListWorkflowStepGroupsRequest $args)
    {
        $result = parent::listWorkflowStepGroups($args->toArray());
        return new ListWorkflowStepGroupsResponse($result->toArray());
    }
}
