<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents;

trait ListLineageEventsTrait
{
    /**
     * @param ListLineageEventsRequest $args
     * @return ListLineageEventsResponse
     */
    public function listLineageEvents(ListLineageEventsRequest $args)
    {
        $result = parent::listLineageEvents($args->toArray());
        return new ListLineageEventsResponse($result->toArray());
    }
}
