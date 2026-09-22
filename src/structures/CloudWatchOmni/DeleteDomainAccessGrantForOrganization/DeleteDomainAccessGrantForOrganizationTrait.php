<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteDomainAccessGrantForOrganization;

trait DeleteDomainAccessGrantForOrganizationTrait
{
    /**
     * @param DeleteDomainAccessGrantForOrganizationRequest $args
     * @return DeleteDomainAccessGrantForOrganizationResponse
     */
    public function deleteDomainAccessGrantForOrganization(DeleteDomainAccessGrantForOrganizationRequest $args)
    {
        $result = parent::deleteDomainAccessGrantForOrganization($args->toArray());
        return new DeleteDomainAccessGrantForOrganizationResponse($result->toArray());
    }
}
