<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminCreateUser;

trait AdminCreateUserTrait
{
    /**
     * @param AdminCreateUserRequest $args
     * @return AdminCreateUserResponse
     */
    public function adminCreateUser(AdminCreateUserRequest $args)
    {
        $result = parent::adminCreateUser($args->toArray());
        return new AdminCreateUserResponse($result->toArray());
    }
}
