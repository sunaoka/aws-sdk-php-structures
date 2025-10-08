<?php

namespace Sunaoka\Aws\Structures\WorkDocs\ActivateUser;

trait ActivateUserTrait
{
    /**
     * @param ActivateUserRequest $args
     * @return ActivateUserResponse
     */
    public function activateUser(ActivateUserRequest $args)
    {
        $result = parent::activateUser($args->toArray());
        return new ActivateUserResponse($result->toArray());
    }
}
