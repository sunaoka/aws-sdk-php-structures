<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile;

trait CreateDataTransformationProfileTrait
{
    /**
     * @param CreateDataTransformationProfileRequest $args
     * @return CreateDataTransformationProfileResponse
     */
    public function createDataTransformationProfile(CreateDataTransformationProfileRequest $args)
    {
        $result = parent::createDataTransformationProfile($args->toArray());
        return new CreateDataTransformationProfileResponse($result->toArray());
    }
}
