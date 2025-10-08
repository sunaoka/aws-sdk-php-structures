<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetGcmChannel;

trait GetGcmChannelTrait
{
    /**
     * @param GetGcmChannelRequest $args
     * @return GetGcmChannelResponse
     */
    public function getGcmChannel(GetGcmChannelRequest $args)
    {
        $result = parent::getGcmChannel($args->toArray());
        return new GetGcmChannelResponse($result->toArray());
    }
}
