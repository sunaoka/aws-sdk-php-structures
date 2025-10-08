<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel;

trait StopChannelTrait
{
    /**
     * @param StopChannelRequest $args
     * @return StopChannelResponse
     */
    public function stopChannel(StopChannelRequest $args)
    {
        $result = parent::stopChannel($args->toArray());
        return new StopChannelResponse($result->toArray());
    }
}
