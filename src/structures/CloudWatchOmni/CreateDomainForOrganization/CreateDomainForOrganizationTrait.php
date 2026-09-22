<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateDomainForOrganization;

trait CreateDomainForOrganizationTrait
{
    /**
     * @param CreateDomainForOrganizationRequest $args
     * @return CreateDomainForOrganizationResponse
     */
    public function createDomainForOrganization(CreateDomainForOrganizationRequest $args)
    {
        $result = parent::createDomainForOrganization($args->toArray());
        return new CreateDomainForOrganizationResponse($result->toArray());
    }
}
