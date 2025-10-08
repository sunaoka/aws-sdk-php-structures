<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutDefaultEncryptionConfiguration;

trait PutDefaultEncryptionConfigurationTrait
{
    /**
     * @param PutDefaultEncryptionConfigurationRequest $args
     * @return PutDefaultEncryptionConfigurationResponse
     */
    public function putDefaultEncryptionConfiguration(PutDefaultEncryptionConfigurationRequest $args)
    {
        $result = parent::putDefaultEncryptionConfiguration($args->toArray());
        return new PutDefaultEncryptionConfigurationResponse($result->toArray());
    }
}
