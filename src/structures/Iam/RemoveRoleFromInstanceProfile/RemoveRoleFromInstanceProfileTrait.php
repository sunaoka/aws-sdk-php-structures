<?php

namespace Sunaoka\Aws\Structures\Iam\RemoveRoleFromInstanceProfile;

trait RemoveRoleFromInstanceProfileTrait
{
    /**
     * @param RemoveRoleFromInstanceProfileRequest $args
     * @return void
     */
    public function removeRoleFromInstanceProfile(RemoveRoleFromInstanceProfileRequest $args)
    {
        parent::removeRoleFromInstanceProfile($args->toArray());
    }
}
