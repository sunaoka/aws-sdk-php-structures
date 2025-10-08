<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteUser;

trait DeleteUserTrait
{
    /**
     * @param DeleteUserRequest $args
     * @return DeleteUserResponse
     */
    public function deleteUser(DeleteUserRequest $args)
    {
        $result = parent::deleteUser($args->toArray());
        return new DeleteUserResponse($result->toArray());
    }
}
