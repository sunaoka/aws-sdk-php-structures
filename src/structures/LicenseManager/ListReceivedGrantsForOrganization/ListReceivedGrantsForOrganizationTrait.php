<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrantsForOrganization;

trait ListReceivedGrantsForOrganizationTrait
{
    /**
     * @param ListReceivedGrantsForOrganizationRequest $args
     * @return ListReceivedGrantsForOrganizationResponse
     */
    public function listReceivedGrantsForOrganization(ListReceivedGrantsForOrganizationRequest $args)
    {
        $result = parent::listReceivedGrantsForOrganization($args->toArray());
        return new ListReceivedGrantsForOrganizationResponse($result->toArray());
    }
}
