<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ChangePassword;

trait ChangePasswordTrait
{
    /**
     * @param ChangePasswordRequest $args
     * @return ChangePasswordResponse
     */
    public function changePassword(ChangePasswordRequest $args)
    {
        $result = parent::changePassword($args->toArray());
        return new ChangePasswordResponse($result->toArray());
    }
}
