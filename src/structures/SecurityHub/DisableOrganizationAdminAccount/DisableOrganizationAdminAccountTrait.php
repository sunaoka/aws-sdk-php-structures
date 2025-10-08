<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableOrganizationAdminAccount;

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
