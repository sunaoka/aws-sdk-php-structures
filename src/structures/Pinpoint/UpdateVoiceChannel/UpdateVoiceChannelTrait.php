<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceChannel;

trait UpdateVoiceChannelTrait
{
    /**
     * @param UpdateVoiceChannelRequest $args
     * @return UpdateVoiceChannelResponse
     */
    public function updateVoiceChannel(UpdateVoiceChannelRequest $args)
    {
        $result = parent::updateVoiceChannel($args->toArray());
        return new UpdateVoiceChannelResponse($result->toArray());
    }
}
