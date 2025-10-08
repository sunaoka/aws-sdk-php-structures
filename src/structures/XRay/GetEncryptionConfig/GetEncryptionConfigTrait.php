<?php

namespace Sunaoka\Aws\Structures\XRay\GetEncryptionConfig;

trait GetEncryptionConfigTrait
{
    /**
     * @param GetEncryptionConfigRequest $args
     * @return GetEncryptionConfigResponse
     */
    public function getEncryptionConfig(GetEncryptionConfigRequest $args)
    {
        $result = parent::getEncryptionConfig($args->toArray());
        return new GetEncryptionConfigResponse($result->toArray());
    }
}
