<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeactivateUser;

trait DeactivateUserTrait
{
    /**
     * @param DeactivateUserRequest $args
     * @return void
     */
    public function deactivateUser(DeactivateUserRequest $args)
    {
        parent::deactivateUser($args->toArray());
    }
}
