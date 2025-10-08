<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUser;

trait DeleteUserTrait
{
    /**
     * @param DeleteUserRequest $args
     * @return void
     */
    public function deleteUser(DeleteUserRequest $args)
    {
        parent::deleteUser($args->toArray());
    }
}
