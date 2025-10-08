<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ConfigureLogsForChannel;

trait ConfigureLogsForChannelTrait
{
    /**
     * @param ConfigureLogsForChannelRequest $args
     * @return ConfigureLogsForChannelResponse
     */
    public function configureLogsForChannel(ConfigureLogsForChannelRequest $args)
    {
        $result = parent::configureLogsForChannel($args->toArray());
        return new ConfigureLogsForChannelResponse($result->toArray());
    }
}
