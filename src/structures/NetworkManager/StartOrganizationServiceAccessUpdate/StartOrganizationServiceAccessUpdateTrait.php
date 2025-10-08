<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartOrganizationServiceAccessUpdate;

trait StartOrganizationServiceAccessUpdateTrait
{
    /**
     * @param StartOrganizationServiceAccessUpdateRequest $args
     * @return StartOrganizationServiceAccessUpdateResponse
     */
    public function startOrganizationServiceAccessUpdate(StartOrganizationServiceAccessUpdateRequest $args)
    {
        $result = parent::startOrganizationServiceAccessUpdate($args->toArray());
        return new StartOrganizationServiceAccessUpdateResponse($result->toArray());
    }
}
