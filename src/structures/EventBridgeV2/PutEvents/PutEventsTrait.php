<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutEvents;

trait PutEventsTrait
{
    /**
     * @param PutEventsRequest $args
     * @return PutEventsResponse
     */
    public function putEvents(PutEventsRequest $args)
    {
        $result = parent::putEvents($args->toArray());
        return new PutEventsResponse($result->toArray());
    }
}
