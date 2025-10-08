<?php

namespace Sunaoka\Aws\Structures\Iam\EnableOrganizationsRootCredentialsManagement;

trait EnableOrganizationsRootCredentialsManagementTrait
{
    /**
     * @param EnableOrganizationsRootCredentialsManagementRequest $args
     * @return EnableOrganizationsRootCredentialsManagementResponse
     */
    public function enableOrganizationsRootCredentialsManagement(EnableOrganizationsRootCredentialsManagementRequest $args)
    {
        $result = parent::enableOrganizationsRootCredentialsManagement($args->toArray());
        return new EnableOrganizationsRootCredentialsManagementResponse($result->toArray());
    }
}
