<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGroupProfile;

trait GetGroupProfileTrait
{
    /**
     * @param GetGroupProfileRequest $args
     * @return GetGroupProfileResponse
     */
    public function getGroupProfile(GetGroupProfileRequest $args)
    {
        $result = parent::getGroupProfile($args->toArray());
        return new GetGroupProfileResponse($result->toArray());
    }
}
