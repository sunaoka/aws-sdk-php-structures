<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents;

trait ListViolationEventsTrait
{
    /**
     * @param ListViolationEventsRequest $args
     * @return ListViolationEventsResponse
     */
    public function listViolationEvents(ListViolationEventsRequest $args)
    {
        $result = parent::listViolationEvents($args->toArray());
        return new ListViolationEventsResponse($result->toArray());
    }
}
