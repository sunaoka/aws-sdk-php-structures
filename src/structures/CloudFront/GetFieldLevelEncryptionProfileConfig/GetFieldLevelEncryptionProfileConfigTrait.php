<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfileConfig;

trait GetFieldLevelEncryptionProfileConfigTrait
{
    /**
     * @param GetFieldLevelEncryptionProfileConfigRequest $args
     * @return GetFieldLevelEncryptionProfileConfigResponse
     */
    public function getFieldLevelEncryptionProfileConfig(GetFieldLevelEncryptionProfileConfigRequest $args)
    {
        $result = parent::getFieldLevelEncryptionProfileConfig($args->toArray());
        return new GetFieldLevelEncryptionProfileConfigResponse($result->toArray());
    }
}
