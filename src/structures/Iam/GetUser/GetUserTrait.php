<?php

namespace Sunaoka\Aws\Structures\Iam\GetUser;

trait GetUserTrait
{
    /**
     * @param GetUserRequest $args
     * @return GetUserResponse
     */
    public function getUser(GetUserRequest $args)
    {
        $result = parent::getUser($args->toArray());
        return new GetUserResponse($result->toArray());
    }
}
