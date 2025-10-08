<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorLoggingConfiguration;

trait PutVoiceConnectorLoggingConfigurationTrait
{
    /**
     * @param PutVoiceConnectorLoggingConfigurationRequest $args
     * @return PutVoiceConnectorLoggingConfigurationResponse
     */
    public function putVoiceConnectorLoggingConfiguration(PutVoiceConnectorLoggingConfigurationRequest $args)
    {
        $result = parent::putVoiceConnectorLoggingConfiguration($args->toArray());
        return new PutVoiceConnectorLoggingConfigurationResponse($result->toArray());
    }
}
