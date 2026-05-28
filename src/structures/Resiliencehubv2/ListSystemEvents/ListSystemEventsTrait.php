<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents;

trait ListSystemEventsTrait
{
    /**
     * @param ListSystemEventsRequest $args
     * @return ListSystemEventsResponse
     */
    public function listSystemEvents(ListSystemEventsRequest $args)
    {
        $result = parent::listSystemEvents($args->toArray());
        return new ListSystemEventsResponse($result->toArray());
    }
}
