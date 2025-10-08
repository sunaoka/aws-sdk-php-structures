<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\RetryWorkflowStep;

trait RetryWorkflowStepTrait
{
    /**
     * @param RetryWorkflowStepRequest $args
     * @return RetryWorkflowStepResponse
     */
    public function retryWorkflowStep(RetryWorkflowStepRequest $args)
    {
        $result = parent::retryWorkflowStep($args->toArray());
        return new RetryWorkflowStepResponse($result->toArray());
    }
}
