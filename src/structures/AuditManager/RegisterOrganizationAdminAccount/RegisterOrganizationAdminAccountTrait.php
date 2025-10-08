<?php

namespace Sunaoka\Aws\Structures\AuditManager\RegisterOrganizationAdminAccount;

trait RegisterOrganizationAdminAccountTrait
{
    /**
     * @param RegisterOrganizationAdminAccountRequest $args
     * @return RegisterOrganizationAdminAccountResponse
     */
    public function registerOrganizationAdminAccount(RegisterOrganizationAdminAccountRequest $args)
    {
        $result = parent::registerOrganizationAdminAccount($args->toArray());
        return new RegisterOrganizationAdminAccountResponse($result->toArray());
    }
}
