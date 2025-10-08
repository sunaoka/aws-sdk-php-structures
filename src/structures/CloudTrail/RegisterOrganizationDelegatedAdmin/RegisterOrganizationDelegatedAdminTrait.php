<?php

namespace Sunaoka\Aws\Structures\CloudTrail\RegisterOrganizationDelegatedAdmin;

trait RegisterOrganizationDelegatedAdminTrait
{
    /**
     * @param RegisterOrganizationDelegatedAdminRequest $args
     * @return RegisterOrganizationDelegatedAdminResponse
     */
    public function registerOrganizationDelegatedAdmin(RegisterOrganizationDelegatedAdminRequest $args)
    {
        $result = parent::registerOrganizationDelegatedAdmin($args->toArray());
        return new RegisterOrganizationDelegatedAdminResponse($result->toArray());
    }
}
