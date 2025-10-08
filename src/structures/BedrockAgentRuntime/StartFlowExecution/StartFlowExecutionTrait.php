<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StartFlowExecution;

trait StartFlowExecutionTrait
{
    /**
     * @param StartFlowExecutionRequest $args
     * @return StartFlowExecutionResponse
     */
    public function startFlowExecution(StartFlowExecutionRequest $args)
    {
        $result = parent::startFlowExecution($args->toArray());
        return new StartFlowExecutionResponse($result->toArray());
    }
}
