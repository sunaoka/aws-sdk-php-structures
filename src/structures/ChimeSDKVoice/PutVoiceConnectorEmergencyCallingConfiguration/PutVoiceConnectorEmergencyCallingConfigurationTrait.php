<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorEmergencyCallingConfiguration;

trait PutVoiceConnectorEmergencyCallingConfigurationTrait
{
    /**
     * @param PutVoiceConnectorEmergencyCallingConfigurationRequest $args
     * @return PutVoiceConnectorEmergencyCallingConfigurationResponse
     */
    public function putVoiceConnectorEmergencyCallingConfiguration(
        PutVoiceConnectorEmergencyCallingConfigurationRequest $args,
    ) {
        $result = parent::putVoiceConnectorEmergencyCallingConfiguration($args->toArray());
        return new PutVoiceConnectorEmergencyCallingConfigurationResponse($result->toArray());
    }
}
