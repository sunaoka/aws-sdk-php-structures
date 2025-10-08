<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForPlaybackConfiguration;

trait ConfigureLogsForPlaybackConfigurationTrait
{
    /**
     * @param ConfigureLogsForPlaybackConfigurationRequest $args
     * @return ConfigureLogsForPlaybackConfigurationResponse
     */
    public function configureLogsForPlaybackConfiguration(ConfigureLogsForPlaybackConfigurationRequest $args)
    {
        $result = parent::configureLogsForPlaybackConfiguration($args->toArray());
        return new ConfigureLogsForPlaybackConfigurationResponse($result->toArray());
    }
}
