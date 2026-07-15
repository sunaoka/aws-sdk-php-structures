<?php

namespace Sunaoka\Aws\Structures\HealthLake\DeleteDataTransformationProfile;

trait DeleteDataTransformationProfileTrait
{
    /**
     * @param DeleteDataTransformationProfileRequest $args
     * @return DeleteDataTransformationProfileResponse
     */
    public function deleteDataTransformationProfile(DeleteDataTransformationProfileRequest $args)
    {
        $result = parent::deleteDataTransformationProfile($args->toArray());
        return new DeleteDataTransformationProfileResponse($result->toArray());
    }
}
