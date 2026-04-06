<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateInferenceProfile;

trait CreateInferenceProfileTrait
{
    /**
     * @param CreateInferenceProfileRequest $args
     * @return CreateInferenceProfileResponse
     */
    public function createInferenceProfile(CreateInferenceProfileRequest $args)
    {
        $result = parent::createInferenceProfile($args->toArray());
        return new CreateInferenceProfileResponse($result->toArray());
    }
}
