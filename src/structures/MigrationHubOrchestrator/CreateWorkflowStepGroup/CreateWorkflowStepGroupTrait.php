<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStepGroup;

trait CreateWorkflowStepGroupTrait
{
    /**
     * @param CreateWorkflowStepGroupRequest $args
     * @return CreateWorkflowStepGroupResponse
     */
    public function createWorkflowStepGroup(CreateWorkflowStepGroupRequest $args)
    {
        $result = parent::createWorkflowStepGroup($args->toArray());
        return new CreateWorkflowStepGroupResponse($result->toArray());
    }
}
