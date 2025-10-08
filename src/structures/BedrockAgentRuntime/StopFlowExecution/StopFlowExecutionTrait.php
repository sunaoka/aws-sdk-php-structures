<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StopFlowExecution;

trait StopFlowExecutionTrait
{
    /**
     * @param StopFlowExecutionRequest $args
     * @return StopFlowExecutionResponse
     */
    public function stopFlowExecution(StopFlowExecutionRequest $args)
    {
        $result = parent::stopFlowExecution($args->toArray());
        return new StopFlowExecutionResponse($result->toArray());
    }
}
