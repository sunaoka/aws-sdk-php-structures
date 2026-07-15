<?php

namespace Sunaoka\Aws\Structures\HealthLake\PublishDataTransformationProfile;

trait PublishDataTransformationProfileTrait
{
    /**
     * @param PublishDataTransformationProfileRequest $args
     * @return PublishDataTransformationProfileResponse
     */
    public function publishDataTransformationProfile(PublishDataTransformationProfileRequest $args)
    {
        $result = parent::publishDataTransformationProfile($args->toArray());
        return new PublishDataTransformationProfileResponse($result->toArray());
    }
}
