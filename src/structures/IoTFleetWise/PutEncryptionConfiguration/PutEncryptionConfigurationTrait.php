<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\PutEncryptionConfiguration;

trait PutEncryptionConfigurationTrait
{
    /**
     * @param PutEncryptionConfigurationRequest $args
     * @return PutEncryptionConfigurationResponse
     */
    public function putEncryptionConfiguration(PutEncryptionConfigurationRequest $args)
    {
        $result = parent::putEncryptionConfiguration($args->toArray());
        return new PutEncryptionConfigurationResponse($result->toArray());
    }
}
