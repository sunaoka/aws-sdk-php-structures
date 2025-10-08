<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendOTPMessage;

trait SendOTPMessageTrait
{
    /**
     * @param SendOTPMessageRequest $args
     * @return SendOTPMessageResponse
     */
    public function sendOTPMessage(SendOTPMessageRequest $args)
    {
        $result = parent::sendOTPMessage($args->toArray());
        return new SendOTPMessageResponse($result->toArray());
    }
}
