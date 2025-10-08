<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmForgotPassword;

trait ConfirmForgotPasswordTrait
{
    /**
     * @param ConfirmForgotPasswordRequest $args
     * @return ConfirmForgotPasswordResponse
     */
    public function confirmForgotPassword(ConfirmForgotPasswordRequest $args)
    {
        $result = parent::confirmForgotPassword($args->toArray());
        return new ConfirmForgotPasswordResponse($result->toArray());
    }
}
