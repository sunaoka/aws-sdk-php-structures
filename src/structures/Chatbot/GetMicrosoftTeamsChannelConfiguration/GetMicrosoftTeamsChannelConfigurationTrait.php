<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetMicrosoftTeamsChannelConfiguration;

trait GetMicrosoftTeamsChannelConfigurationTrait
{
    /**
     * @param GetMicrosoftTeamsChannelConfigurationRequest $args
     * @return GetMicrosoftTeamsChannelConfigurationResponse
     */
    public function getMicrosoftTeamsChannelConfiguration(GetMicrosoftTeamsChannelConfigurationRequest $args)
    {
        $result = parent::getMicrosoftTeamsChannelConfiguration($args->toArray());
        return new GetMicrosoftTeamsChannelConfigurationResponse($result->toArray());
    }
}
