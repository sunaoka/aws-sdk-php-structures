<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorStreamingConfiguration;

trait DeleteVoiceConnectorStreamingConfigurationTrait
{
    /**
     * @param DeleteVoiceConnectorStreamingConfigurationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorStreamingConfiguration(
        DeleteVoiceConnectorStreamingConfigurationRequest $args,
    ) {
        parent::deleteVoiceConnectorStreamingConfiguration($args->toArray());
    }
}
