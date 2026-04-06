<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileDetails;

trait GetLaunchProfileDetailsTrait
{
    /**
     * @param GetLaunchProfileDetailsRequest $args
     * @return GetLaunchProfileDetailsResponse
     */
    public function getLaunchProfileDetails(GetLaunchProfileDetailsRequest $args)
    {
        $result = parent::getLaunchProfileDetails($args->toArray());
        return new GetLaunchProfileDetailsResponse($result->toArray());
    }
}
