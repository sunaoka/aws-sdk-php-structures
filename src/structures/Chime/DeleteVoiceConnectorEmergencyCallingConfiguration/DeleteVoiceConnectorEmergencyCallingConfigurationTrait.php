<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorEmergencyCallingConfiguration;

trait DeleteVoiceConnectorEmergencyCallingConfigurationTrait
{
    /**
     * @param DeleteVoiceConnectorEmergencyCallingConfigurationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorEmergencyCallingConfiguration(DeleteVoiceConnectorEmergencyCallingConfigurationRequest $args)
    {
        parent::deleteVoiceConnectorEmergencyCallingConfiguration($args->toArray());
    }
}
