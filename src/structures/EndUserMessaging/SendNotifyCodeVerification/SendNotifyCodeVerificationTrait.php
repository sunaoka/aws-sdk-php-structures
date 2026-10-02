<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\SendNotifyCodeVerification;

trait SendNotifyCodeVerificationTrait
{
    /**
     * @param SendNotifyCodeVerificationRequest $args
     * @return SendNotifyCodeVerificationResponse
     */
    public function sendNotifyCodeVerification(SendNotifyCodeVerificationRequest $args)
    {
        $result = parent::sendNotifyCodeVerification($args->toArray());
        return new SendNotifyCodeVerificationResponse($result->toArray());
    }
}
