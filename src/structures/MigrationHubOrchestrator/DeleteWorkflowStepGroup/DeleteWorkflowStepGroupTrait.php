<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteWorkflowStepGroup;

trait DeleteWorkflowStepGroupTrait
{
    /**
     * @param DeleteWorkflowStepGroupRequest $args
     * @return DeleteWorkflowStepGroupResponse
     */
    public function deleteWorkflowStepGroup(DeleteWorkflowStepGroupRequest $args)
    {
        $result = parent::deleteWorkflowStepGroup($args->toArray());
        return new DeleteWorkflowStepGroupResponse($result->toArray());
    }
}
