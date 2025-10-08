<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserPassword;

trait AdminSetUserPasswordTrait
{
    /**
     * @param AdminSetUserPasswordRequest $args
     * @return AdminSetUserPasswordResponse
     */
    public function adminSetUserPassword(AdminSetUserPasswordRequest $args)
    {
        $result = parent::adminSetUserPassword($args->toArray());
        return new AdminSetUserPasswordResponse($result->toArray());
    }
}
