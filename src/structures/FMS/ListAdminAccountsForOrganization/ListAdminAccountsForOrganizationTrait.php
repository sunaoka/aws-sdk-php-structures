<?php

namespace Sunaoka\Aws\Structures\FMS\ListAdminAccountsForOrganization;

trait ListAdminAccountsForOrganizationTrait
{
    /**
     * @param ListAdminAccountsForOrganizationRequest $args
     * @return ListAdminAccountsForOrganizationResponse
     */
    public function listAdminAccountsForOrganization(ListAdminAccountsForOrganizationRequest $args)
    {
        $result = parent::listAdminAccountsForOrganization($args->toArray());
        return new ListAdminAccountsForOrganizationResponse($result->toArray());
    }
}
