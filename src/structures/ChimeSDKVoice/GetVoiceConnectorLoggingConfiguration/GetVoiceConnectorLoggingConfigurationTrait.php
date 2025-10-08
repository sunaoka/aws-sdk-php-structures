<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorLoggingConfiguration;

trait GetVoiceConnectorLoggingConfigurationTrait
{
    /**
     * @param GetVoiceConnectorLoggingConfigurationRequest $args
     * @return GetVoiceConnectorLoggingConfigurationResponse
     */
    public function getVoiceConnectorLoggingConfiguration(GetVoiceConnectorLoggingConfigurationRequest $args)
    {
        $result = parent::getVoiceConnectorLoggingConfiguration($args->toArray());
        return new GetVoiceConnectorLoggingConfigurationResponse($result->toArray());
    }
}
