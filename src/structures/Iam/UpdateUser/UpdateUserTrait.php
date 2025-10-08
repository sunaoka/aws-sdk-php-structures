<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateUser;

trait UpdateUserTrait
{
    /**
     * @param UpdateUserRequest $args
     * @return void
     */
    public function updateUser(UpdateUserRequest $args)
    {
        parent::updateUser($args->toArray());
    }
}
