<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListEvents;

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
