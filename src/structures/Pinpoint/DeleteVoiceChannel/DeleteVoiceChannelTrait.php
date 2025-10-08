<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteVoiceChannel;

trait DeleteVoiceChannelTrait
{
    /**
     * @param DeleteVoiceChannelRequest $args
     * @return DeleteVoiceChannelResponse
     */
    public function deleteVoiceChannel(DeleteVoiceChannelRequest $args)
    {
        $result = parent::deleteVoiceChannel($args->toArray());
        return new DeleteVoiceChannelResponse($result->toArray());
    }
}
