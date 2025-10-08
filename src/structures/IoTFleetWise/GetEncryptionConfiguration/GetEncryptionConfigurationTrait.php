<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetEncryptionConfiguration;

trait GetEncryptionConfigurationTrait
{
    /**
     * @param GetEncryptionConfigurationRequest $args
     * @return GetEncryptionConfigurationResponse
     */
    public function getEncryptionConfiguration(GetEncryptionConfigurationRequest $args)
    {
        $result = parent::getEncryptionConfiguration($args->toArray());
        return new GetEncryptionConfigurationResponse($result->toArray());
    }
}
