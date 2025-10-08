<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser;

trait DisassociateUserTrait
{
    /**
     * @param DisassociateUserRequest $args
     * @return DisassociateUserResponse
     */
    public function disassociateUser(DisassociateUserRequest $args)
    {
        $result = parent::disassociateUser($args->toArray());
        return new DisassociateUserResponse($result->toArray());
    }
}
