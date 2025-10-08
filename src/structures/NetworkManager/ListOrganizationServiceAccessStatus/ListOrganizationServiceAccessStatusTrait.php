<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListOrganizationServiceAccessStatus;

trait ListOrganizationServiceAccessStatusTrait
{
    /**
     * @param ListOrganizationServiceAccessStatusRequest $args
     * @return ListOrganizationServiceAccessStatusResponse
     */
    public function listOrganizationServiceAccessStatus(ListOrganizationServiceAccessStatusRequest $args)
    {
        $result = parent::listOrganizationServiceAccessStatus($args->toArray());
        return new ListOrganizationServiceAccessStatusResponse($result->toArray());
    }
}
