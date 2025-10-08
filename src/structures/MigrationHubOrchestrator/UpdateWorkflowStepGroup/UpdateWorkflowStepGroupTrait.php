<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStepGroup;

trait UpdateWorkflowStepGroupTrait
{
    /**
     * @param UpdateWorkflowStepGroupRequest $args
     * @return UpdateWorkflowStepGroupResponse
     */
    public function updateWorkflowStepGroup(UpdateWorkflowStepGroupRequest $args)
    {
        $result = parent::updateWorkflowStepGroup($args->toArray());
        return new UpdateWorkflowStepGroupResponse($result->toArray());
    }
}
