<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamOrganizationAdminAccount;

trait EnableIpamOrganizationAdminAccountTrait
{
    /**
     * @param EnableIpamOrganizationAdminAccountRequest $args
     * @return EnableIpamOrganizationAdminAccountResponse
     */
    public function enableIpamOrganizationAdminAccount(EnableIpamOrganizationAdminAccountRequest $args)
    {
        $result = parent::enableIpamOrganizationAdminAccount($args->toArray());
        return new EnableIpamOrganizationAdminAccountResponse($result->toArray());
    }
}
