<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorStreamingConfiguration;

trait PutVoiceConnectorStreamingConfigurationTrait
{
    /**
     * @param PutVoiceConnectorStreamingConfigurationRequest $args
     * @return PutVoiceConnectorStreamingConfigurationResponse
     */
    public function putVoiceConnectorStreamingConfiguration(PutVoiceConnectorStreamingConfigurationRequest $args)
    {
        $result = parent::putVoiceConnectorStreamingConfiguration($args->toArray());
        return new PutVoiceConnectorStreamingConfigurationResponse($result->toArray());
    }
}
