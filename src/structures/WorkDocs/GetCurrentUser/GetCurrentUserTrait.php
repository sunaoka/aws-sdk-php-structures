<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetCurrentUser;

trait GetCurrentUserTrait
{
    /**
     * @param GetCurrentUserRequest $args
     * @return GetCurrentUserResponse
     */
    public function getCurrentUser(GetCurrentUserRequest $args)
    {
        $result = parent::getCurrentUser($args->toArray());
        return new GetCurrentUserResponse($result->toArray());
    }
}
