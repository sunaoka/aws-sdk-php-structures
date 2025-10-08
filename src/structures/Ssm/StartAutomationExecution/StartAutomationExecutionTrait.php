<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAutomationExecution;

trait StartAutomationExecutionTrait
{
    /**
     * @param StartAutomationExecutionRequest $args
     * @return StartAutomationExecutionResponse
     */
    public function startAutomationExecution(StartAutomationExecutionRequest $args)
    {
        $result = parent::startAutomationExecution($args->toArray());
        return new StartAutomationExecutionResponse($result->toArray());
    }
}
