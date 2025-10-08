<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsChannel;

trait GetApnsChannelTrait
{
    /**
     * @param GetApnsChannelRequest $args
     * @return GetApnsChannelResponse
     */
    public function getApnsChannel(GetApnsChannelRequest $args)
    {
        $result = parent::getApnsChannel($args->toArray());
        return new GetApnsChannelResponse($result->toArray());
    }
}
