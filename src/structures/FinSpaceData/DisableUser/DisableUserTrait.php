<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DisableUser;

trait DisableUserTrait
{
    /**
     * @param DisableUserRequest $args
     * @return DisableUserResponse
     */
    public function disableUser(DisableUserRequest $args)
    {
        $result = parent::disableUser($args->toArray());
        return new DisableUserResponse($result->toArray());
    }
}
