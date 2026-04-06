<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorExternalSystemsConfiguration;

trait DeleteVoiceConnectorExternalSystemsConfigurationTrait
{
    /**
     * @param DeleteVoiceConnectorExternalSystemsConfigurationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorExternalSystemsConfiguration(DeleteVoiceConnectorExternalSystemsConfigurationRequest $args)
    {
        parent::deleteVoiceConnectorExternalSystemsConfiguration($args->toArray());
    }
}
