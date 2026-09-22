<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListDomainAccessGrantsForOrganization;

trait ListDomainAccessGrantsForOrganizationTrait
{
    /**
     * @param ListDomainAccessGrantsForOrganizationRequest $args
     * @return ListDomainAccessGrantsForOrganizationResponse
     */
    public function listDomainAccessGrantsForOrganization(ListDomainAccessGrantsForOrganizationRequest $args)
    {
        $result = parent::listDomainAccessGrantsForOrganization($args->toArray());
        return new ListDomainAccessGrantsForOrganizationResponse($result->toArray());
    }
}
