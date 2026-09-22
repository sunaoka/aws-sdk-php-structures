<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainForOrganization;

trait GetDomainForOrganizationTrait
{
    /**
     * @param GetDomainForOrganizationRequest $args
     * @return GetDomainForOrganizationResponse
     */
    public function getDomainForOrganization(GetDomainForOrganizationRequest $args)
    {
        $result = parent::getDomainForOrganization($args->toArray());
        return new GetDomainForOrganizationResponse($result->toArray());
    }
}
