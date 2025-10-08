<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteFieldLevelEncryptionProfile;

trait DeleteFieldLevelEncryptionProfileTrait
{
    /**
     * @param DeleteFieldLevelEncryptionProfileRequest $args
     * @return void
     */
    public function deleteFieldLevelEncryptionProfile(DeleteFieldLevelEncryptionProfileRequest $args)
    {
        parent::deleteFieldLevelEncryptionProfile($args->toArray());
    }
}
