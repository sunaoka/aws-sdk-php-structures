<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateEncryptionConfiguration;

trait UpdateEncryptionConfigurationTrait
{
    /**
     * @param UpdateEncryptionConfigurationRequest $args
     * @return UpdateEncryptionConfigurationResponse
     */
    public function updateEncryptionConfiguration(UpdateEncryptionConfigurationRequest $args)
    {
        $result = parent::updateEncryptionConfiguration($args->toArray());
        return new UpdateEncryptionConfigurationResponse($result->toArray());
    }
}
