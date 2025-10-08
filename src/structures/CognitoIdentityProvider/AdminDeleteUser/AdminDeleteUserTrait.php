<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteUser;

trait AdminDeleteUserTrait
{
    /**
     * @param AdminDeleteUserRequest $args
     * @return void
     */
    public function adminDeleteUser(AdminDeleteUserRequest $args)
    {
        parent::adminDeleteUser($args->toArray());
    }
}
