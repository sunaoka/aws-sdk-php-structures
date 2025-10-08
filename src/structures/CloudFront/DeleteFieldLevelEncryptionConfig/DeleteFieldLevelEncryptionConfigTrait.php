<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteFieldLevelEncryptionConfig;

trait DeleteFieldLevelEncryptionConfigTrait
{
    /**
     * @param DeleteFieldLevelEncryptionConfigRequest $args
     * @return void
     */
    public function deleteFieldLevelEncryptionConfig(DeleteFieldLevelEncryptionConfigRequest $args)
    {
        parent::deleteFieldLevelEncryptionConfig($args->toArray());
    }
}
