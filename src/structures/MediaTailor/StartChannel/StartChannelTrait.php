<?php

namespace Sunaoka\Aws\Structures\MediaTailor\StartChannel;

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
