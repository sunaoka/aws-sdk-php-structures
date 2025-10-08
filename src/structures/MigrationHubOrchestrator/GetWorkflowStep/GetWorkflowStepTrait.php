<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep;

trait GetWorkflowStepTrait
{
    /**
     * @param GetWorkflowStepRequest $args
     * @return GetWorkflowStepResponse
     */
    public function getWorkflowStep(GetWorkflowStepRequest $args)
    {
        $result = parent::getWorkflowStep($args->toArray());
        return new GetWorkflowStepResponse($result->toArray());
    }
}
