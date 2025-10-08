<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisableAWSOrganizationsAccess;

trait DisableAWSOrganizationsAccessTrait
{
    /**
     * @param DisableAWSOrganizationsAccessRequest $args
     * @return DisableAWSOrganizationsAccessResponse
     */
    public function disableAWSOrganizationsAccess(DisableAWSOrganizationsAccessRequest $args)
    {
        $result = parent::disableAWSOrganizationsAccess($args->toArray());
        return new DisableAWSOrganizationsAccessResponse($result->toArray());
    }
}
