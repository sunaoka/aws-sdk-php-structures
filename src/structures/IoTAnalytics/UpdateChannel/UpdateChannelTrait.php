<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateChannel;

trait UpdateChannelTrait
{
    /**
     * @param UpdateChannelRequest $args
     * @return void
     */
    public function updateChannel(UpdateChannelRequest $args)
    {
        parent::updateChannel($args->toArray());
    }
}
