<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationsAccessForOrganization;

trait GetNotificationsAccessForOrganizationTrait
{
    /**
     * @param GetNotificationsAccessForOrganizationRequest $args
     * @return GetNotificationsAccessForOrganizationResponse
     */
    public function getNotificationsAccessForOrganization(GetNotificationsAccessForOrganizationRequest $args)
    {
        $result = parent::getNotificationsAccessForOrganization($args->toArray());
        return new GetNotificationsAccessForOrganizationResponse($result->toArray());
    }
}
