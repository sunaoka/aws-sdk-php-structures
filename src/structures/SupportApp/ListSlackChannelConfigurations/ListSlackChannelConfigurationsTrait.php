<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackChannelConfigurations;

trait ListSlackChannelConfigurationsTrait
{
    /**
     * @param ListSlackChannelConfigurationsRequest $args
     * @return ListSlackChannelConfigurationsResponse
     */
    public function listSlackChannelConfigurations(ListSlackChannelConfigurationsRequest $args)
    {
        $result = parent::listSlackChannelConfigurations($args->toArray());
        return new ListSlackChannelConfigurationsResponse($result->toArray());
    }
}
