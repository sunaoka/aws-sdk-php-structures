<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentSubscriptionEvents;

trait ListSegmentSubscriptionEventsTrait
{
    /**
     * @param ListSegmentSubscriptionEventsRequest $args
     * @return ListSegmentSubscriptionEventsResponse
     */
    public function listSegmentSubscriptionEvents(ListSegmentSubscriptionEventsRequest $args)
    {
        $result = parent::listSegmentSubscriptionEvents($args->toArray());
        return new ListSegmentSubscriptionEventsResponse($result->toArray());
    }
}
