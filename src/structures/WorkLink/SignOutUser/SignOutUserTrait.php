<?php

namespace Sunaoka\Aws\Structures\WorkLink\SignOutUser;

trait SignOutUserTrait
{
    /**
     * @param SignOutUserRequest $args
     * @return SignOutUserResponse
     */
    public function signOutUser(SignOutUserRequest $args)
    {
        $result = parent::signOutUser($args->toArray());
        return new SignOutUserResponse($result->toArray());
    }
}
