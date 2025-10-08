<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel;

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
