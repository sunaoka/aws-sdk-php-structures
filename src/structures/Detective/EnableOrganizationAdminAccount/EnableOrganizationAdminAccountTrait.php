<?php

namespace Sunaoka\Aws\Structures\Detective\EnableOrganizationAdminAccount;

trait EnableOrganizationAdminAccountTrait
{
    /**
     * @param EnableOrganizationAdminAccountRequest $args
     * @return void
     */
    public function enableOrganizationAdminAccount(EnableOrganizationAdminAccountRequest $args)
    {
        parent::enableOrganizationAdminAccount($args->toArray());
    }
}
