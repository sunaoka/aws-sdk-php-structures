<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminEnableUser;

trait AdminEnableUserTrait
{
    /**
     * @param AdminEnableUserRequest $args
     * @return AdminEnableUserResponse
     */
    public function adminEnableUser(AdminEnableUserRequest $args)
    {
        $result = parent::adminEnableUser($args->toArray());
        return new AdminEnableUserResponse($result->toArray());
    }
}
