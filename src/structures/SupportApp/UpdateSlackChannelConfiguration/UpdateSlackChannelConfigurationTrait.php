<?php

namespace Sunaoka\Aws\Structures\SupportApp\UpdateSlackChannelConfiguration;

trait UpdateSlackChannelConfigurationTrait
{
    /**
     * @param UpdateSlackChannelConfigurationRequest $args
     * @return UpdateSlackChannelConfigurationResponse
     */
    public function updateSlackChannelConfiguration(UpdateSlackChannelConfigurationRequest $args)
    {
        $result = parent::updateSlackChannelConfiguration($args->toArray());
        return new UpdateSlackChannelConfigurationResponse($result->toArray());
    }
}
