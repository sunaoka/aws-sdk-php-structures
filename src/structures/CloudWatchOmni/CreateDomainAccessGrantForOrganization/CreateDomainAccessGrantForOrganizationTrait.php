<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateDomainAccessGrantForOrganization;

trait CreateDomainAccessGrantForOrganizationTrait
{
    /**
     * @param CreateDomainAccessGrantForOrganizationRequest $args
     * @return CreateDomainAccessGrantForOrganizationResponse
     */
    public function createDomainAccessGrantForOrganization(CreateDomainAccessGrantForOrganizationRequest $args)
    {
        $result = parent::createDomainAccessGrantForOrganization($args->toArray());
        return new CreateDomainAccessGrantForOrganizationResponse($result->toArray());
    }
}
