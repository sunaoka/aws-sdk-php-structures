<?php

namespace Sunaoka\Aws\Structures\Notifications\DisableNotificationsAccessForOrganization;

trait DisableNotificationsAccessForOrganizationTrait
{
    /**
     * @param DisableNotificationsAccessForOrganizationRequest $args
     * @return DisableNotificationsAccessForOrganizationResponse
     */
    public function disableNotificationsAccessForOrganization(DisableNotificationsAccessForOrganizationRequest $args)
    {
        $result = parent::disableNotificationsAccessForOrganization($args->toArray());
        return new DisableNotificationsAccessForOrganizationResponse($result->toArray());
    }
}
