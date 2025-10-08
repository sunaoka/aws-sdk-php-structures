<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorExternalSystemsConfiguration;

trait PutVoiceConnectorExternalSystemsConfigurationTrait
{
    /**
     * @param PutVoiceConnectorExternalSystemsConfigurationRequest $args
     * @return PutVoiceConnectorExternalSystemsConfigurationResponse
     */
    public function putVoiceConnectorExternalSystemsConfiguration(PutVoiceConnectorExternalSystemsConfigurationRequest $args)
    {
        $result = parent::putVoiceConnectorExternalSystemsConfiguration($args->toArray());
        return new PutVoiceConnectorExternalSystemsConfigurationResponse($result->toArray());
    }
}
