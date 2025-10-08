<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\RedactChannelMessage;

trait RedactChannelMessageTrait
{
    /**
     * @param RedactChannelMessageRequest $args
     * @return RedactChannelMessageResponse
     */
    public function redactChannelMessage(RedactChannelMessageRequest $args)
    {
        $result = parent::redactChannelMessage($args->toArray());
        return new RedactChannelMessageResponse($result->toArray());
    }
}
