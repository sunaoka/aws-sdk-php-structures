<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetDefaultEncryptionConfiguration;

trait GetDefaultEncryptionConfigurationTrait
{
    /**
     * @param GetDefaultEncryptionConfigurationRequest $args
     * @return GetDefaultEncryptionConfigurationResponse
     */
    public function getDefaultEncryptionConfiguration(GetDefaultEncryptionConfigurationRequest $args)
    {
        $result = parent::getDefaultEncryptionConfiguration($args->toArray());
        return new GetDefaultEncryptionConfigurationResponse($result->toArray());
    }
}
