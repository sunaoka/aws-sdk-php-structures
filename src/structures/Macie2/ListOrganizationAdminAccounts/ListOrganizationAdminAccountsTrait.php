<?php

namespace Sunaoka\Aws\Structures\Macie2\ListOrganizationAdminAccounts;

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
