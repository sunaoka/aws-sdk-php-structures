<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeregisterOrganizationDelegatedAdmin;

trait DeregisterOrganizationDelegatedAdminTrait
{
    /**
     * @param DeregisterOrganizationDelegatedAdminRequest $args
     * @return DeregisterOrganizationDelegatedAdminResponse
     */
    public function deregisterOrganizationDelegatedAdmin(DeregisterOrganizationDelegatedAdminRequest $args)
    {
        $result = parent::deregisterOrganizationDelegatedAdmin($args->toArray());
        return new DeregisterOrganizationDelegatedAdminResponse($result->toArray());
    }
}
