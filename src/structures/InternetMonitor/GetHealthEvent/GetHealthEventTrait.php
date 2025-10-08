<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent;

trait GetHealthEventTrait
{
    /**
     * @param GetHealthEventRequest $args
     * @return GetHealthEventResponse
     */
    public function getHealthEvent(GetHealthEventRequest $args)
    {
        $result = parent::getHealthEvent($args->toArray());
        return new GetHealthEventResponse($result->toArray());
    }
}
