<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStepGroup;

trait GetWorkflowStepGroupTrait
{
    /**
     * @param GetWorkflowStepGroupRequest $args
     * @return GetWorkflowStepGroupResponse
     */
    public function getWorkflowStepGroup(GetWorkflowStepGroupRequest $args)
    {
        $result = parent::getWorkflowStepGroup($args->toArray());
        return new GetWorkflowStepGroupResponse($result->toArray());
    }
}
