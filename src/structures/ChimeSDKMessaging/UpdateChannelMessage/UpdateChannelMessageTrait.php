<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelMessage;

trait UpdateChannelMessageTrait
{
    /**
     * @param UpdateChannelMessageRequest $args
     * @return UpdateChannelMessageResponse
     */
    public function updateChannelMessage(UpdateChannelMessageRequest $args)
    {
        $result = parent::updateChannelMessage($args->toArray());
        return new UpdateChannelMessageResponse($result->toArray());
    }
}
