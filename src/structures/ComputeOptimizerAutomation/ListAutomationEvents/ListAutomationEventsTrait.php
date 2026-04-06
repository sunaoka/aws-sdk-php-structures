<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEvents;

trait ListAutomationEventsTrait
{
    /**
     * @param ListAutomationEventsRequest $args
     * @return ListAutomationEventsResponse
     */
    public function listAutomationEvents(ListAutomationEventsRequest $args)
    {
        $result = parent::listAutomationEvents($args->toArray());
        return new ListAutomationEventsResponse($result->toArray());
    }
}
