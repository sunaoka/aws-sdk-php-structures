<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorEmergencyCallingConfiguration;

trait GetVoiceConnectorEmergencyCallingConfigurationTrait
{
    /**
     * @param GetVoiceConnectorEmergencyCallingConfigurationRequest $args
     * @return GetVoiceConnectorEmergencyCallingConfigurationResponse
     */
    public function getVoiceConnectorEmergencyCallingConfiguration(GetVoiceConnectorEmergencyCallingConfigurationRequest $args)
    {
        $result = parent::getVoiceConnectorEmergencyCallingConfiguration($args->toArray());
        return new GetVoiceConnectorEmergencyCallingConfigurationResponse($result->toArray());
    }
}
