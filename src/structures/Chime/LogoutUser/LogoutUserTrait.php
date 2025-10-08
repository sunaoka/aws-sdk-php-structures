<?php

namespace Sunaoka\Aws\Structures\Chime\LogoutUser;

trait LogoutUserTrait
{
    /**
     * @param LogoutUserRequest $args
     * @return LogoutUserResponse
     */
    public function logoutUser(LogoutUserRequest $args)
    {
        $result = parent::logoutUser($args->toArray());
        return new LogoutUserResponse($result->toArray());
    }
}
