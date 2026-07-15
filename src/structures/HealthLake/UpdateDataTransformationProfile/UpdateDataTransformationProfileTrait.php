<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateDataTransformationProfile;

trait UpdateDataTransformationProfileTrait
{
    /**
     * @param UpdateDataTransformationProfileRequest $args
     * @return UpdateDataTransformationProfileResponse
     */
    public function updateDataTransformationProfile(UpdateDataTransformationProfileRequest $args)
    {
        $result = parent::updateDataTransformationProfile($args->toArray());
        return new UpdateDataTransformationProfileResponse($result->toArray());
    }
}
