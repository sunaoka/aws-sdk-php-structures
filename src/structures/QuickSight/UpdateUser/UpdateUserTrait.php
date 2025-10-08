<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateUser;

trait UpdateUserTrait
{
    /**
     * @param UpdateUserRequest $args
     * @return UpdateUserResponse
     */
    public function updateUser(UpdateUserRequest $args)
    {
        $result = parent::updateUser($args->toArray());
        return new UpdateUserResponse($result->toArray());
    }
}
