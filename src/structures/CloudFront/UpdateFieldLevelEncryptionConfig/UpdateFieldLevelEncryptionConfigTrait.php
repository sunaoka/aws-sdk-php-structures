<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig;

trait UpdateFieldLevelEncryptionConfigTrait
{
    /**
     * @param UpdateFieldLevelEncryptionConfigRequest $args
     * @return UpdateFieldLevelEncryptionConfigResponse
     */
    public function updateFieldLevelEncryptionConfig(UpdateFieldLevelEncryptionConfigRequest $args)
    {
        $result = parent::updateFieldLevelEncryptionConfig($args->toArray());
        return new UpdateFieldLevelEncryptionConfigResponse($result->toArray());
    }
}
