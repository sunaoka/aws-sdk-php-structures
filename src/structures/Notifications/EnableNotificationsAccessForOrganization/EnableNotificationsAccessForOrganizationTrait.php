<?php

namespace Sunaoka\Aws\Structures\Notifications\EnableNotificationsAccessForOrganization;

trait EnableNotificationsAccessForOrganizationTrait
{
    /**
     * @param EnableNotificationsAccessForOrganizationRequest $args
     * @return EnableNotificationsAccessForOrganizationResponse
     */
    public function enableNotificationsAccessForOrganization(EnableNotificationsAccessForOrganizationRequest $args)
    {
        $result = parent::enableNotificationsAccessForOrganization($args->toArray());
        return new EnableNotificationsAccessForOrganizationResponse($result->toArray());
    }
}
