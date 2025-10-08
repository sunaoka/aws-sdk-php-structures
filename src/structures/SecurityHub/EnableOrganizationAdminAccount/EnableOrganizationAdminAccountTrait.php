<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableOrganizationAdminAccount;

trait EnableOrganizationAdminAccountTrait
{
    /**
     * @param EnableOrganizationAdminAccountRequest $args
     * @return EnableOrganizationAdminAccountResponse
     */
    public function enableOrganizationAdminAccount(EnableOrganizationAdminAccountRequest $args)
    {
        $result = parent::enableOrganizationAdminAccount($args->toArray());
        return new EnableOrganizationAdminAccountResponse($result->toArray());
    }
}
