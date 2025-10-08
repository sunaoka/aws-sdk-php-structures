<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents;

trait LookupEventsTrait
{
    /**
     * @param LookupEventsRequest $args
     * @return LookupEventsResponse
     */
    public function lookupEvents(LookupEventsRequest $args)
    {
        $result = parent::lookupEvents($args->toArray());
        return new LookupEventsResponse($result->toArray());
    }
}
