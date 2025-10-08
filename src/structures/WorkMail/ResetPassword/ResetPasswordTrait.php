<?php

namespace Sunaoka\Aws\Structures\WorkMail\ResetPassword;

trait ResetPasswordTrait
{
    /**
     * @param ResetPasswordRequest $args
     * @return ResetPasswordResponse
     */
    public function resetPassword(ResetPasswordRequest $args)
    {
        $result = parent::resetPassword($args->toArray());
        return new ResetPasswordResponse($result->toArray());
    }
}
