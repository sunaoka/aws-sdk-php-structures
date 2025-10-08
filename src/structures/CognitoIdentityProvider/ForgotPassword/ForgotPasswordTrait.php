<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgotPassword;

trait ForgotPasswordTrait
{
    /**
     * @param ForgotPasswordRequest $args
     * @return ForgotPasswordResponse
     */
    public function forgotPassword(ForgotPasswordRequest $args)
    {
        $result = parent::forgotPassword($args->toArray());
        return new ForgotPasswordResponse($result->toArray());
    }
}
