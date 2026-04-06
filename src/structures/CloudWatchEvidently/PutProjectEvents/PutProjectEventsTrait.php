<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\PutProjectEvents;

trait PutProjectEventsTrait
{
    /**
     * @param PutProjectEventsRequest $args
     * @return PutProjectEventsResponse
     */
    public function putProjectEvents(PutProjectEventsRequest $args)
    {
        $result = parent::putProjectEvents($args->toArray());
        return new PutProjectEventsResponse($result->toArray());
    }
}
