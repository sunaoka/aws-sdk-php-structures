<?php

namespace Sunaoka\Aws\Structures\Pinpoint\VerifyOTPMessage;

trait VerifyOTPMessageTrait
{
    /**
     * @param VerifyOTPMessageRequest $args
     * @return VerifyOTPMessageResponse
     */
    public function verifyOTPMessage(VerifyOTPMessageRequest $args)
    {
        $result = parent::verifyOTPMessage($args->toArray());
        return new VerifyOTPMessageResponse($result->toArray());
    }
}
