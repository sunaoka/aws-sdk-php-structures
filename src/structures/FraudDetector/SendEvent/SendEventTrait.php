<?php

namespace Sunaoka\Aws\Structures\FraudDetector\SendEvent;

trait SendEventTrait
{
    /**
     * @param SendEventRequest $args
     * @return SendEventResponse
     */
    public function sendEvent(SendEventRequest $args)
    {
        $result = parent::sendEvent($args->toArray());
        return new SendEventResponse($result->toArray());
    }
}
