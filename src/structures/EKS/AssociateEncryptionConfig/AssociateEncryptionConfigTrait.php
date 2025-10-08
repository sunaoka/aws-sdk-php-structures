<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateEncryptionConfig;

trait AssociateEncryptionConfigTrait
{
    /**
     * @param AssociateEncryptionConfigRequest $args
     * @return AssociateEncryptionConfigResponse
     */
    public function associateEncryptionConfig(AssociateEncryptionConfigRequest $args)
    {
        $result = parent::associateEncryptionConfig($args->toArray());
        return new AssociateEncryptionConfigResponse($result->toArray());
    }
}
