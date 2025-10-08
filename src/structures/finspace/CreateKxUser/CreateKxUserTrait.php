<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxUser;

trait CreateKxUserTrait
{
    /**
     * @param CreateKxUserRequest $args
     * @return CreateKxUserResponse
     */
    public function createKxUser(CreateKxUserRequest $args)
    {
        $result = parent::createKxUser($args->toArray());
        return new CreateKxUserResponse($result->toArray());
    }
}
