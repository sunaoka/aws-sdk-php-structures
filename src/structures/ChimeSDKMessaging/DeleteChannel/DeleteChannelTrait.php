<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannel;

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
