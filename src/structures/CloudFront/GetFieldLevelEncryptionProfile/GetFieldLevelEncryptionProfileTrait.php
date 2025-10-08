<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfile;

trait GetFieldLevelEncryptionProfileTrait
{
    /**
     * @param GetFieldLevelEncryptionProfileRequest $args
     * @return GetFieldLevelEncryptionProfileResponse
     */
    public function getFieldLevelEncryptionProfile(GetFieldLevelEncryptionProfileRequest $args)
    {
        $result = parent::getFieldLevelEncryptionProfile($args->toArray());
        return new GetFieldLevelEncryptionProfileResponse($result->toArray());
    }
}
