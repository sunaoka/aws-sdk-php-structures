<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainAccessGrantForOrganization;

trait GetDomainAccessGrantForOrganizationTrait
{
    /**
     * @param GetDomainAccessGrantForOrganizationRequest $args
     * @return GetDomainAccessGrantForOrganizationResponse
     */
    public function getDomainAccessGrantForOrganization(GetDomainAccessGrantForOrganizationRequest $args)
    {
        $result = parent::getDomainAccessGrantForOrganization($args->toArray());
        return new GetDomainAccessGrantForOrganizationResponse($result->toArray());
    }
}
