<?php

namespace Sunaoka\Aws\Structures\SupportApp\CreateSlackChannelConfiguration;

trait CreateSlackChannelConfigurationTrait
{
    /**
     * @param CreateSlackChannelConfigurationRequest $args
     * @return CreateSlackChannelConfigurationResponse
     */
    public function createSlackChannelConfiguration(CreateSlackChannelConfigurationRequest $args)
    {
        $result = parent::createSlackChannelConfiguration($args->toArray());
        return new CreateSlackChannelConfigurationResponse($result->toArray());
    }
}
