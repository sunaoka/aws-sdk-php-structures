<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\CreateUser;

trait CreateUserTrait
{
    /**
     * @param CreateUserRequest $args
     * @return CreateUserResponse
     */
    public function createUser(CreateUserRequest $args)
    {
        $result = parent::createUser($args->toArray());
        return new CreateUserResponse($result->toArray());
    }
}
