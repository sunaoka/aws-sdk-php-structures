<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsChannelConfigurations;

trait ListMicrosoftTeamsChannelConfigurationsTrait
{
    /**
     * @param ListMicrosoftTeamsChannelConfigurationsRequest $args
     * @return ListMicrosoftTeamsChannelConfigurationsResponse
     */
    public function listMicrosoftTeamsChannelConfigurations(ListMicrosoftTeamsChannelConfigurationsRequest $args)
    {
        $result = parent::listMicrosoftTeamsChannelConfigurations($args->toArray());
        return new ListMicrosoftTeamsChannelConfigurationsResponse($result->toArray());
    }
}
