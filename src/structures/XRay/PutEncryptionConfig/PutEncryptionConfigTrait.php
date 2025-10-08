<?php

namespace Sunaoka\Aws\Structures\XRay\PutEncryptionConfig;

trait PutEncryptionConfigTrait
{
    /**
     * @param PutEncryptionConfigRequest $args
     * @return PutEncryptionConfigResponse
     */
    public function putEncryptionConfig(PutEncryptionConfigRequest $args)
    {
        $result = parent::putEncryptionConfig($args->toArray());
        return new PutEncryptionConfigResponse($result->toArray());
    }
}
