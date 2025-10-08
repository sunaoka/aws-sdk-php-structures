<?php

namespace Sunaoka\Aws\Structures\Iam\GetLoginProfile;

trait GetLoginProfileTrait
{
    /**
     * @param GetLoginProfileRequest $args
     * @return GetLoginProfileResponse
     */
    public function getLoginProfile(GetLoginProfileRequest $args)
    {
        $result = parent::getLoginProfile($args->toArray());
        return new GetLoginProfileResponse($result->toArray());
    }
}
