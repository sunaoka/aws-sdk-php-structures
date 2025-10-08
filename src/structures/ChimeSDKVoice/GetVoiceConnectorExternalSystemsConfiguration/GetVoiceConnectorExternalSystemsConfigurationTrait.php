<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorExternalSystemsConfiguration;

trait GetVoiceConnectorExternalSystemsConfigurationTrait
{
    /**
     * @param GetVoiceConnectorExternalSystemsConfigurationRequest $args
     * @return GetVoiceConnectorExternalSystemsConfigurationResponse
     */
    public function getVoiceConnectorExternalSystemsConfiguration(GetVoiceConnectorExternalSystemsConfigurationRequest $args)
    {
        $result = parent::getVoiceConnectorExternalSystemsConfiguration($args->toArray());
        return new GetVoiceConnectorExternalSystemsConfigurationResponse($result->toArray());
    }
}
