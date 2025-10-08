<?php

namespace Sunaoka\Aws\Structures\RAM\EnableSharingWithAwsOrganization;

trait EnableSharingWithAwsOrganizationTrait
{
    /**
     * @param EnableSharingWithAwsOrganizationRequest $args
     * @return EnableSharingWithAwsOrganizationResponse
     */
    public function enableSharingWithAwsOrganization(EnableSharingWithAwsOrganizationRequest $args)
    {
        $result = parent::enableSharingWithAwsOrganization($args->toArray());
        return new EnableSharingWithAwsOrganizationResponse($result->toArray());
    }
}
