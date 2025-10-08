<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableIpamOrganizationAdminAccount;

trait DisableIpamOrganizationAdminAccountTrait
{
    /**
     * @param DisableIpamOrganizationAdminAccountRequest $args
     * @return DisableIpamOrganizationAdminAccountResponse
     */
    public function disableIpamOrganizationAdminAccount(DisableIpamOrganizationAdminAccountRequest $args)
    {
        $result = parent::disableIpamOrganizationAdminAccount($args->toArray());
        return new DisableIpamOrganizationAdminAccountResponse($result->toArray());
    }
}
