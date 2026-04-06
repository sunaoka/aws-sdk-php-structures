<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListEntityEvents;

trait ListEntityEventsTrait
{
    /**
     * @param ListEntityEventsRequest $args
     * @return ListEntityEventsResponse
     */
    public function listEntityEvents(ListEntityEventsRequest $args)
    {
        $result = parent::listEntityEvents($args->toArray());
        return new ListEntityEventsResponse($result->toArray());
    }
}
