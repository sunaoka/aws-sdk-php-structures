<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsChannelConfiguration;

trait DeleteMicrosoftTeamsChannelConfigurationTrait
{
    /**
     * @param DeleteMicrosoftTeamsChannelConfigurationRequest $args
     * @return DeleteMicrosoftTeamsChannelConfigurationResponse
     */
    public function deleteMicrosoftTeamsChannelConfiguration(DeleteMicrosoftTeamsChannelConfigurationRequest $args)
    {
        $result = parent::deleteMicrosoftTeamsChannelConfiguration($args->toArray());
        return new DeleteMicrosoftTeamsChannelConfigurationResponse($result->toArray());
    }
}
