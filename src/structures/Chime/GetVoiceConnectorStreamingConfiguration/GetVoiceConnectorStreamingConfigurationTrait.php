<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorStreamingConfiguration;

trait GetVoiceConnectorStreamingConfigurationTrait
{
    /**
     * @param GetVoiceConnectorStreamingConfigurationRequest $args
     * @return GetVoiceConnectorStreamingConfigurationResponse
     */
    public function getVoiceConnectorStreamingConfiguration(GetVoiceConnectorStreamingConfigurationRequest $args)
    {
        $result = parent::getVoiceConnectorStreamingConfiguration($args->toArray());
        return new GetVoiceConnectorStreamingConfigurationResponse($result->toArray());
    }
}
