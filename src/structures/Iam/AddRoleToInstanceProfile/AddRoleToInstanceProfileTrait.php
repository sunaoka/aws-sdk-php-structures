<?php

namespace Sunaoka\Aws\Structures\Iam\AddRoleToInstanceProfile;

trait AddRoleToInstanceProfileTrait
{
    /**
     * @param AddRoleToInstanceProfileRequest $args
     * @return void
     */
    public function addRoleToInstanceProfile(AddRoleToInstanceProfileRequest $args)
    {
        parent::addRoleToInstanceProfile($args->toArray());
    }
}
