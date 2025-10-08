<?php

namespace Sunaoka\Aws\Structures\Ssm\StopAutomationExecution;

trait StopAutomationExecutionTrait
{
    /**
     * @param StopAutomationExecutionRequest $args
     * @return StopAutomationExecutionResponse
     */
    public function stopAutomationExecution(StopAutomationExecutionRequest $args)
    {
        $result = parent::stopAutomationExecution($args->toArray());
        return new StopAutomationExecutionResponse($result->toArray());
    }
}
