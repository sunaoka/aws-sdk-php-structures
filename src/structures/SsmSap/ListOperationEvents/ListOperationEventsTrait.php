<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents;

trait ListOperationEventsTrait
{
    /**
     * @param ListOperationEventsRequest $args
     * @return ListOperationEventsResponse
     */
    public function listOperationEvents(ListOperationEventsRequest $args)
    {
        $result = parent::listOperationEvents($args->toArray());
        return new ListOperationEventsResponse($result->toArray());
    }
}
