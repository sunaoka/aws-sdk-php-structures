<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListOrganizationAdminAccounts;

trait ListOrganizationAdminAccountsTrait
{
    /**
     * @param ListOrganizationAdminAccountsRequest $args
     * @return ListOrganizationAdminAccountsResponse
     */
    public function listOrganizationAdminAccounts(ListOrganizationAdminAccountsRequest $args)
    {
        $result = parent::listOrganizationAdminAccounts($args->toArray());
        return new ListOrganizationAdminAccountsResponse($result->toArray());
    }
}
