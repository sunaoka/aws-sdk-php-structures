<?php

namespace Sunaoka\Aws\Structures\HealthLake\GetDataTransformationProfile;

trait GetDataTransformationProfileTrait
{
    /**
     * @param GetDataTransformationProfileRequest $args
     * @return GetDataTransformationProfileResponse
     */
    public function getDataTransformationProfile(GetDataTransformationProfileRequest $args)
    {
        $result = parent::getDataTransformationProfile($args->toArray());
        return new GetDataTransformationProfileResponse($result->toArray());
    }
}
