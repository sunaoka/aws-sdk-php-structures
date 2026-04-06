<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteChannel;

trait DeleteChannelTrait
{
    /**
     * @param DeleteChannelRequest $args
     * @return void
     */
    public function deleteChannel(DeleteChannelRequest $args)
    {
        parent::deleteChannel($args->toArray());
    }
}
