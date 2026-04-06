<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorEmergencyCallingConfiguration;

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
