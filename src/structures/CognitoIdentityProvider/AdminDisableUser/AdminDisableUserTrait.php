<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDisableUser;

trait AdminDisableUserTrait
{
    /**
     * @param AdminDisableUserRequest $args
     * @return AdminDisableUserResponse
     */
    public function adminDisableUser(AdminDisableUserRequest $args)
    {
        $result = parent::adminDisableUser($args->toArray());
        return new AdminDisableUserResponse($result->toArray());
    }
}
