<?php

namespace Sunaoka\Aws\Structures\Iam\DisableOrganizationsRootCredentialsManagement;

trait DisableOrganizationsRootCredentialsManagementTrait
{
    /**
     * @param DisableOrganizationsRootCredentialsManagementRequest $args
     * @return DisableOrganizationsRootCredentialsManagementResponse
     */
    public function disableOrganizationsRootCredentialsManagement(DisableOrganizationsRootCredentialsManagementRequest $args)
    {
        $result = parent::disableOrganizationsRootCredentialsManagement($args->toArray());
        return new DisableOrganizationsRootCredentialsManagementResponse($result->toArray());
    }
}
