<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStep;

trait CreateWorkflowStepTrait
{
    /**
     * @param CreateWorkflowStepRequest $args
     * @return CreateWorkflowStepResponse
     */
    public function createWorkflowStep(CreateWorkflowStepRequest $args)
    {
        $result = parent::createWorkflowStep($args->toArray());
        return new CreateWorkflowStepResponse($result->toArray());
    }
}
