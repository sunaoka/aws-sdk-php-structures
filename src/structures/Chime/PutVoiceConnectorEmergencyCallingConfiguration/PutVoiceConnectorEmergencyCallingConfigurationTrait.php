<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorEmergencyCallingConfiguration;

trait PutVoiceConnectorEmergencyCallingConfigurationTrait
{
    /**
     * @param PutVoiceConnectorEmergencyCallingConfigurationRequest $args
     * @return PutVoiceConnectorEmergencyCallingConfigurationResponse
     */
    public function putVoiceConnectorEmergencyCallingConfiguration(PutVoiceConnectorEmergencyCallingConfigurationRequest $args)
    {
        $result = parent::putVoiceConnectorEmergencyCallingConfiguration($args->toArray());
        return new PutVoiceConnectorEmergencyCallingConfigurationResponse($result->toArray());
    }
}
