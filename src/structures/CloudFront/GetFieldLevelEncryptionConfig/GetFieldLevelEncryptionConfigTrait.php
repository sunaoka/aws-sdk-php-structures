<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionConfig;

trait GetFieldLevelEncryptionConfigTrait
{
    /**
     * @param GetFieldLevelEncryptionConfigRequest $args
     * @return GetFieldLevelEncryptionConfigResponse
     */
    public function getFieldLevelEncryptionConfig(GetFieldLevelEncryptionConfigRequest $args)
    {
        $result = parent::getFieldLevelEncryptionConfig($args->toArray());
        return new GetFieldLevelEncryptionConfigResponse($result->toArray());
    }
}
