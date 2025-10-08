<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser;

trait AssociateUserTrait
{
    /**
     * @param AssociateUserRequest $args
     * @return AssociateUserResponse
     */
    public function associateUser(AssociateUserRequest $args)
    {
        $result = parent::associateUser($args->toArray());
        return new AssociateUserResponse($result->toArray());
    }
}
