<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelMessage;

trait DeleteChannelMessageTrait
{
    /**
     * @param DeleteChannelMessageRequest $args
     * @return void
     */
    public function deleteChannelMessage(DeleteChannelMessageRequest $args)
    {
        parent::deleteChannelMessage($args->toArray());
    }
}
