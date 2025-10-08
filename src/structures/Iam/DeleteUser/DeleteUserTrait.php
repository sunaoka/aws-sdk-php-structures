<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteUser;

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
