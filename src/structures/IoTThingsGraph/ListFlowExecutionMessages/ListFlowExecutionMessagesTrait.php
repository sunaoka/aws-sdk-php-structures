<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListFlowExecutionMessages;

trait ListFlowExecutionMessagesTrait
{
    /**
     * @param ListFlowExecutionMessagesRequest $args
     * @return ListFlowExecutionMessagesResponse
     */
    public function listFlowExecutionMessages(ListFlowExecutionMessagesRequest $args)
    {
        $result = parent::listFlowExecutionMessages($args->toArray());
        return new ListFlowExecutionMessagesResponse($result->toArray());
    }
}
