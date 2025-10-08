<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\EnableAWSOrganizationsAccess;

trait EnableAWSOrganizationsAccessTrait
{
    /**
     * @param EnableAWSOrganizationsAccessRequest $args
     * @return EnableAWSOrganizationsAccessResponse
     */
    public function enableAWSOrganizationsAccess(EnableAWSOrganizationsAccessRequest $args)
    {
        $result = parent::enableAWSOrganizationsAccess($args->toArray());
        return new EnableAWSOrganizationsAccessResponse($result->toArray());
    }
}
