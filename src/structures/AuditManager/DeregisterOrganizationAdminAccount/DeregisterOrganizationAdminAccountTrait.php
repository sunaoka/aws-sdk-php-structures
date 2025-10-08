<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeregisterOrganizationAdminAccount;

trait DeregisterOrganizationAdminAccountTrait
{
    /**
     * @param DeregisterOrganizationAdminAccountRequest $args
     * @return DeregisterOrganizationAdminAccountResponse
     */
    public function deregisterOrganizationAdminAccount(DeregisterOrganizationAdminAccountRequest $args)
    {
        $result = parent::deregisterOrganizationAdminAccount($args->toArray());
        return new DeregisterOrganizationAdminAccountResponse($result->toArray());
    }
}
