<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetVoiceChannel;

trait GetVoiceChannelTrait
{
    /**
     * @param GetVoiceChannelRequest $args
     * @return GetVoiceChannelResponse
     */
    public function getVoiceChannel(GetVoiceChannelRequest $args)
    {
        $result = parent::getVoiceChannel($args->toArray());
        return new GetVoiceChannelResponse($result->toArray());
    }
}
