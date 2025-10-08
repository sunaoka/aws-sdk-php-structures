<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFieldLevelEncryptionConfig;

trait CreateFieldLevelEncryptionConfigTrait
{
    /**
     * @param CreateFieldLevelEncryptionConfigRequest $args
     * @return CreateFieldLevelEncryptionConfigResponse
     */
    public function createFieldLevelEncryptionConfig(CreateFieldLevelEncryptionConfigRequest $args)
    {
        $result = parent::createFieldLevelEncryptionConfig($args->toArray());
        return new CreateFieldLevelEncryptionConfigResponse($result->toArray());
    }
}
