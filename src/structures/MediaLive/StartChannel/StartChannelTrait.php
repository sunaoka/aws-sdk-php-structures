<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel;

trait StartChannelTrait
{
    /**
     * @param StartChannelRequest $args
     * @return StartChannelResponse
     */
    public function startChannel(StartChannelRequest $args)
    {
        $result = parent::startChannel($args->toArray());
        return new StartChannelResponse($result->toArray());
    }
}
