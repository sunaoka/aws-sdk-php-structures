<?php

namespace Sunaoka\Aws\Structures\Lightsail\SendContactMethodVerification;

trait SendContactMethodVerificationTrait
{
    /**
     * @param SendContactMethodVerificationRequest $args
     * @return SendContactMethodVerificationResponse
     */
    public function sendContactMethodVerification(SendContactMethodVerificationRequest $args)
    {
        $result = parent::sendContactMethodVerification($args->toArray());
        return new SendContactMethodVerificationResponse($result->toArray());
    }
}
