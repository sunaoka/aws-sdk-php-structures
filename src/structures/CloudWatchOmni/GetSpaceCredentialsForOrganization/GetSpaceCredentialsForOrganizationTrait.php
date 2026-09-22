<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceCredentialsForOrganization;

trait GetSpaceCredentialsForOrganizationTrait
{
    /**
     * @param GetSpaceCredentialsForOrganizationRequest $args
     * @return GetSpaceCredentialsForOrganizationResponse
     */
    public function getSpaceCredentialsForOrganization(GetSpaceCredentialsForOrganizationRequest $args)
    {
        $result = parent::getSpaceCredentialsForOrganization($args->toArray());
        return new GetSpaceCredentialsForOrganizationResponse($result->toArray());
    }
}
