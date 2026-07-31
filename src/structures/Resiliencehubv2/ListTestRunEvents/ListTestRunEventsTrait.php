<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunEvents;

trait ListTestRunEventsTrait
{
    /**
     * @param ListTestRunEventsRequest $args
     * @return ListTestRunEventsResponse
     */
    public function listTestRunEvents(ListTestRunEventsRequest $args)
    {
        $result = parent::listTestRunEvents($args->toArray());
        return new ListTestRunEventsResponse($result->toArray());
    }
}
