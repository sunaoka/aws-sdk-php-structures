<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStep;

trait UpdateWorkflowStepTrait
{
    /**
     * @param UpdateWorkflowStepRequest $args
     * @return UpdateWorkflowStepResponse
     */
    public function updateWorkflowStep(UpdateWorkflowStepRequest $args)
    {
        $result = parent::updateWorkflowStep($args->toArray());
        return new UpdateWorkflowStepResponse($result->toArray());
    }
}
