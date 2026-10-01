<?php

namespace Sunaoka\Aws\Structures\Account\SendPhoneNumberVerification;

trait SendPhoneNumberVerificationTrait
{
    /**
     * @param SendPhoneNumberVerificationRequest $args
     * @return SendPhoneNumberVerificationResponse
     */
    public function sendPhoneNumberVerification(SendPhoneNumberVerificationRequest $args)
    {
        $result = parent::sendPhoneNumberVerification($args->toArray());
        return new SendPhoneNumberVerificationResponse($result->toArray());
    }
}
