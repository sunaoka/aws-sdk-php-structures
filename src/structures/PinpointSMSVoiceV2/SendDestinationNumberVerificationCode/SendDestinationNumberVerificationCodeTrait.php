<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendDestinationNumberVerificationCode;

trait SendDestinationNumberVerificationCodeTrait
{
    /**
     * @param SendDestinationNumberVerificationCodeRequest $args
     * @return SendDestinationNumberVerificationCodeResponse
     */
    public function sendDestinationNumberVerificationCode(SendDestinationNumberVerificationCodeRequest $args)
    {
        $result = parent::sendDestinationNumberVerificationCode($args->toArray());
        return new SendDestinationNumberVerificationCodeResponse($result->toArray());
    }
}
