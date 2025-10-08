<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsChannel;

trait GetSmsChannelTrait
{
    /**
     * @param GetSmsChannelRequest $args
     * @return GetSmsChannelResponse
     */
    public function getSmsChannel(GetSmsChannelRequest $args)
    {
        $result = parent::getSmsChannel($args->toArray());
        return new GetSmsChannelResponse($result->toArray());
    }
}
