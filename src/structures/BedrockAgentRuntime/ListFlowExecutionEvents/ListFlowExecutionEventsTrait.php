<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents;

trait ListFlowExecutionEventsTrait
{
    /**
     * @param ListFlowExecutionEventsRequest $args
     * @return ListFlowExecutionEventsResponse
     */
    public function listFlowExecutionEvents(ListFlowExecutionEventsRequest $args)
    {
        $result = parent::listFlowExecutionEvents($args->toArray());
        return new ListFlowExecutionEventsResponse($result->toArray());
    }
}
