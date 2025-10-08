<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents;

trait GetInsightEventsTrait
{
    /**
     * @param GetInsightEventsRequest $args
     * @return GetInsightEventsResponse
     */
    public function getInsightEvents(GetInsightEventsRequest $args)
    {
        $result = parent::getInsightEvents($args->toArray());
        return new GetInsightEventsResponse($result->toArray());
    }
}
