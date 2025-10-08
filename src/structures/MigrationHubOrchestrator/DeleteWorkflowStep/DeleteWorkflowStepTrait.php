<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteWorkflowStep;

trait DeleteWorkflowStepTrait
{
    /**
     * @param DeleteWorkflowStepRequest $args
     * @return DeleteWorkflowStepResponse
     */
    public function deleteWorkflowStep(DeleteWorkflowStepRequest $args)
    {
        $result = parent::deleteWorkflowStep($args->toArray());
        return new DeleteWorkflowStepResponse($result->toArray());
    }
}
