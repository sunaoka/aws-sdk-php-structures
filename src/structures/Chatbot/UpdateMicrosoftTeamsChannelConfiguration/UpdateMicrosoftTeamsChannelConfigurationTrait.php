<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateMicrosoftTeamsChannelConfiguration;

trait UpdateMicrosoftTeamsChannelConfigurationTrait
{
    /**
     * @param UpdateMicrosoftTeamsChannelConfigurationRequest $args
     * @return UpdateMicrosoftTeamsChannelConfigurationResponse
     */
    public function updateMicrosoftTeamsChannelConfiguration(UpdateMicrosoftTeamsChannelConfigurationRequest $args)
    {
        $result = parent::updateMicrosoftTeamsChannelConfiguration($args->toArray());
        return new UpdateMicrosoftTeamsChannelConfigurationResponse($result->toArray());
    }
}
