<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel;

trait CreateChannelTrait
{
    /**
     * @param CreateChannelRequest $args
     * @return CreateChannelResponse
     */
    public function createChannel(CreateChannelRequest $args)
    {
        $result = parent::createChannel($args->toArray());
        return new CreateChannelResponse($result->toArray());
    }
}
