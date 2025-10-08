<?php

namespace Sunaoka\Aws\Structures\IVS\GetChannel;

trait GetChannelTrait
{
    /**
     * @param GetChannelRequest $args
     * @return GetChannelResponse
     */
    public function getChannel(GetChannelRequest $args)
    {
        $result = parent::getChannel($args->toArray());
        return new GetChannelResponse($result->toArray());
    }
}
