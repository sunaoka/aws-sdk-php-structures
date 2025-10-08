<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminResetUserPassword;

trait AdminResetUserPasswordTrait
{
    /**
     * @param AdminResetUserPasswordRequest $args
     * @return AdminResetUserPasswordResponse
     */
    public function adminResetUserPassword(AdminResetUserPasswordRequest $args)
    {
        $result = parent::adminResetUserPassword($args->toArray());
        return new AdminResetUserPasswordResponse($result->toArray());
    }
}
