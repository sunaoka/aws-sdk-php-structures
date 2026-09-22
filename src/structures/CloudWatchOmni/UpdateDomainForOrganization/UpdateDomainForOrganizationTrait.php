<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateDomainForOrganization;

trait UpdateDomainForOrganizationTrait
{
    /**
     * @param UpdateDomainForOrganizationRequest $args
     * @return UpdateDomainForOrganizationResponse
     */
    public function updateDomainForOrganization(UpdateDomainForOrganizationRequest $args)
    {
        $result = parent::updateDomainForOrganization($args->toArray());
        return new UpdateDomainForOrganizationResponse($result->toArray());
    }
}
