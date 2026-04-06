<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutions;

trait ListFlowExecutionsTrait
{
    /**
     * @param ListFlowExecutionsRequest $args
     * @return ListFlowExecutionsResponse
     */
    public function listFlowExecutions(ListFlowExecutionsRequest $args)
    {
        $result = parent::listFlowExecutions($args->toArray());
        return new ListFlowExecutionsResponse($result->toArray());
    }
}
