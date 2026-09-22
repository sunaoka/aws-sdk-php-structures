<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteDomainForOrganization;

trait DeleteDomainForOrganizationTrait
{
    /**
     * @param DeleteDomainForOrganizationRequest $args
     * @return DeleteDomainForOrganizationResponse
     */
    public function deleteDomainForOrganization(DeleteDomainForOrganizationRequest $args)
    {
        $result = parent::deleteDomainForOrganization($args->toArray());
        return new DeleteDomainForOrganizationResponse($result->toArray());
    }
}
