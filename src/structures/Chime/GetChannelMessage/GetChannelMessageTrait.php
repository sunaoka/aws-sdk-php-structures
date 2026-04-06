<?php

namespace Sunaoka\Aws\Structures\Chime\GetChannelMessage;

trait GetChannelMessageTrait
{
    /**
     * @param GetChannelMessageRequest $args
     * @return GetChannelMessageResponse
     */
    public function getChannelMessage(GetChannelMessageRequest $args)
    {
        $result = parent::getChannelMessage($args->toArray());
        return new GetChannelMessageResponse($result->toArray());
    }
}
