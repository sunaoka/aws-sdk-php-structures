<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\GetAWSOrganizationsAccessStatus;

trait GetAWSOrganizationsAccessStatusTrait
{
    /**
     * @param GetAWSOrganizationsAccessStatusRequest $args
     * @return GetAWSOrganizationsAccessStatusResponse
     */
    public function getAWSOrganizationsAccessStatus(GetAWSOrganizationsAccessStatusRequest $args)
    {
        $result = parent::getAWSOrganizationsAccessStatus($args->toArray());
        return new GetAWSOrganizationsAccessStatusResponse($result->toArray());
    }
}
