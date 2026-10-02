<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ValidateNotifyCodeVerification;

trait ValidateNotifyCodeVerificationTrait
{
    /**
     * @param ValidateNotifyCodeVerificationRequest $args
     * @return ValidateNotifyCodeVerificationResponse
     */
    public function validateNotifyCodeVerification(ValidateNotifyCodeVerificationRequest $args)
    {
        $result = parent::validateNotifyCodeVerification($args->toArray());
        return new ValidateNotifyCodeVerificationResponse($result->toArray());
    }
}
