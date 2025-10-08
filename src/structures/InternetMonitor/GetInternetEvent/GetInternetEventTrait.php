<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetInternetEvent;

trait GetInternetEventTrait
{
    /**
     * @param GetInternetEventRequest $args
     * @return GetInternetEventResponse
     */
    public function getInternetEvent(GetInternetEventRequest $args)
    {
        $result = parent::getInternetEvent($args->toArray());
        return new GetInternetEventResponse($result->toArray());
    }
}
