<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionProfile;

trait UpdateFieldLevelEncryptionProfileTrait
{
    /**
     * @param UpdateFieldLevelEncryptionProfileRequest $args
     * @return UpdateFieldLevelEncryptionProfileResponse
     */
    public function updateFieldLevelEncryptionProfile(UpdateFieldLevelEncryptionProfileRequest $args)
    {
        $result = parent::updateFieldLevelEncryptionProfile($args->toArray());
        return new UpdateFieldLevelEncryptionProfileResponse($result->toArray());
    }
}
