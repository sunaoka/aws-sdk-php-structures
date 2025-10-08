<?php

namespace Sunaoka\Aws\Structures\QuickSight\RegisterUser;

trait RegisterUserTrait
{
    /**
     * @param RegisterUserRequest $args
     * @return RegisterUserResponse
     */
    public function registerUser(RegisterUserRequest $args)
    {
        $result = parent::registerUser($args->toArray());
        return new RegisterUserResponse($result->toArray());
    }
}
