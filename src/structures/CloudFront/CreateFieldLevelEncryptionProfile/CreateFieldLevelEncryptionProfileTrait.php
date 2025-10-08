<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFieldLevelEncryptionProfile;

trait CreateFieldLevelEncryptionProfileTrait
{
    /**
     * @param CreateFieldLevelEncryptionProfileRequest $args
     * @return CreateFieldLevelEncryptionProfileResponse
     */
    public function createFieldLevelEncryptionProfile(CreateFieldLevelEncryptionProfileRequest $args)
    {
        $result = parent::createFieldLevelEncryptionProfile($args->toArray());
        return new CreateFieldLevelEncryptionProfileResponse($result->toArray());
    }
}
