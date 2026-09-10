<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents;

trait ListTestRunSourceEventsTrait
{
    /**
     * @param ListTestRunSourceEventsRequest $args
     * @return ListTestRunSourceEventsResponse
     */
    public function listTestRunSourceEvents(ListTestRunSourceEventsRequest $args)
    {
        $result = parent::listTestRunSourceEvents($args->toArray());
        return new ListTestRunSourceEventsResponse($result->toArray());
    }
}
