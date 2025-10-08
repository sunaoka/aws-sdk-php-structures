<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution;

trait GetFlowExecutionTrait
{
    /**
     * @param GetFlowExecutionRequest $args
     * @return GetFlowExecutionResponse
     */
    public function getFlowExecution(GetFlowExecutionRequest $args)
    {
        $result = parent::getFlowExecution($args->toArray());
        return new GetFlowExecutionResponse($result->toArray());
    }
}
