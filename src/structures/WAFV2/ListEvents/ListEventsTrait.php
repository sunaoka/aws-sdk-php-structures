<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEvents;

trait ListEventsTrait
{
    /**
     * @param ListEventsRequest $args
     * @return ListEventsResponse
     */
    public function listEvents(ListEventsRequest $args)
    {
        $result = parent::listEvents($args->toArray());
        return new ListEventsResponse($result->toArray());
    }
}
