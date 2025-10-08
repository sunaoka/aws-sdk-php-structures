<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUser;

trait AdminGetUserTrait
{
    /**
     * @param AdminGetUserRequest $args
     * @return AdminGetUserResponse
     */
    public function adminGetUser(AdminGetUserRequest $args)
    {
        $result = parent::adminGetUser($args->toArray());
        return new AdminGetUserResponse($result->toArray());
    }
}
