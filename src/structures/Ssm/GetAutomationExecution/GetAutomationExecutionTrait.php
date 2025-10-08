<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution;

trait GetAutomationExecutionTrait
{
    /**
     * @param GetAutomationExecutionRequest $args
     * @return GetAutomationExecutionResponse
     */
    public function getAutomationExecution(GetAutomationExecutionRequest $args)
    {
        $result = parent::getAutomationExecution($args->toArray());
        return new GetAutomationExecutionResponse($result->toArray());
    }
}
