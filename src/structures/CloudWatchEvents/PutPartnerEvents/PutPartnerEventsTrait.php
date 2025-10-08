<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutPartnerEvents;

trait PutPartnerEventsTrait
{
    /**
     * @param PutPartnerEventsRequest $args
     * @return PutPartnerEventsResponse
     */
    public function putPartnerEvents(PutPartnerEventsRequest $args)
    {
        $result = parent::putPartnerEvents($args->toArray());
        return new PutPartnerEventsResponse($result->toArray());
    }
}
