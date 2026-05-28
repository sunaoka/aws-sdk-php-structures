<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents;

trait ListServiceEventsTrait
{
    /**
     * @param ListServiceEventsRequest $args
     * @return ListServiceEventsResponse
     */
    public function listServiceEvents(ListServiceEventsRequest $args)
    {
        $result = parent::listServiceEvents($args->toArray());
        return new ListServiceEventsResponse($result->toArray());
    }
}
