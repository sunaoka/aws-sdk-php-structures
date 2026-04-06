<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateMicrosoftTeamsChannelConfiguration;

trait CreateMicrosoftTeamsChannelConfigurationTrait
{
    /**
     * @param CreateMicrosoftTeamsChannelConfigurationRequest $args
     * @return CreateMicrosoftTeamsChannelConfigurationResponse
     */
    public function createMicrosoftTeamsChannelConfiguration(CreateMicrosoftTeamsChannelConfigurationRequest $args)
    {
        $result = parent::createMicrosoftTeamsChannelConfiguration($args->toArray());
        return new CreateMicrosoftTeamsChannelConfigurationResponse($result->toArray());
    }
}
