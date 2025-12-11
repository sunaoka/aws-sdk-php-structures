<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\SendEmailVerificationCode;

trait SendEmailVerificationCodeTrait
{
    /**
     * @param SendEmailVerificationCodeRequest $args
     * @return SendEmailVerificationCodeResponse
     */
    public function sendEmailVerificationCode(SendEmailVerificationCodeRequest $args)
    {
        $result = parent::sendEmailVerificationCode($args->toArray());
        return new SendEmailVerificationCodeResponse($result->toArray());
    }
}
