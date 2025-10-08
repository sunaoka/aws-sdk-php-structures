<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages;

trait ListChannelMessagesTrait
{
    /**
     * @param ListChannelMessagesRequest $args
     * @return ListChannelMessagesResponse
     */
    public function listChannelMessages(ListChannelMessagesRequest $args)
    {
        $result = parent::listChannelMessages($args->toArray());
        return new ListChannelMessagesResponse($result->toArray());
    }
}
