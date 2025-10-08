<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents;

trait ListHealthEventsTrait
{
    /**
     * @param ListHealthEventsRequest $args
     * @return ListHealthEventsResponse
     */
    public function listHealthEvents(ListHealthEventsRequest $args)
    {
        $result = parent::listHealthEvents($args->toArray());
        return new ListHealthEventsResponse($result->toArray());
    }
}
