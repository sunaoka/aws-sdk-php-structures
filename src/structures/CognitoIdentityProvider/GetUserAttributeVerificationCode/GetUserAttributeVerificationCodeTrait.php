<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAttributeVerificationCode;

trait GetUserAttributeVerificationCodeTrait
{
    /**
     * @param GetUserAttributeVerificationCodeRequest $args
     * @return GetUserAttributeVerificationCodeResponse
     */
    public function getUserAttributeVerificationCode(GetUserAttributeVerificationCodeRequest $args)
    {
        $result = parent::getUserAttributeVerificationCode($args->toArray());
        return new GetUserAttributeVerificationCodeResponse($result->toArray());
    }
}
