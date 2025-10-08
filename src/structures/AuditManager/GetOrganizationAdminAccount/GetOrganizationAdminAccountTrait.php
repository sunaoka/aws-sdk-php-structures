<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetOrganizationAdminAccount;

trait GetOrganizationAdminAccountTrait
{
    /**
     * @param GetOrganizationAdminAccountRequest $args
     * @return GetOrganizationAdminAccountResponse
     */
    public function getOrganizationAdminAccount(GetOrganizationAdminAccountRequest $args)
    {
        $result = parent::getOrganizationAdminAccount($args->toArray());
        return new GetOrganizationAdminAccountResponse($result->toArray());
    }
}
