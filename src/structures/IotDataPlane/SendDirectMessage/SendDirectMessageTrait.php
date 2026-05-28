<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\SendDirectMessage;

trait SendDirectMessageTrait
{
    /**
     * @param SendDirectMessageRequest $args
     * @return SendDirectMessageResponse
     */
    public function sendDirectMessage(SendDirectMessageRequest $args)
    {
        $result = parent::sendDirectMessage($args->toArray());
        return new SendDirectMessageResponse($result->toArray());
    }
}
