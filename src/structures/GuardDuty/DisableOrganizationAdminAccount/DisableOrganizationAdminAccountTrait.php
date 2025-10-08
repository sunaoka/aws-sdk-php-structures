<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisableOrganizationAdminAccount;

trait DisableOrganizationAdminAccountTrait
{
    /**
     * @param DisableOrganizationAdminAccountRequest $args
     * @return DisableOrganizationAdminAccountResponse
     */
    public function disableOrganizationAdminAccount(DisableOrganizationAdminAccountRequest $args)
    {
        $result = parent::disableOrganizationAdminAccount($args->toArray());
        return new DisableOrganizationAdminAccountResponse($result->toArray());
    }
}
