<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteGcmChannel;

trait DeleteGcmChannelTrait
{
    /**
     * @param DeleteGcmChannelRequest $args
     * @return DeleteGcmChannelResponse
     */
    public function deleteGcmChannel(DeleteGcmChannelRequest $args)
    {
        $result = parent::deleteGcmChannel($args->toArray());
        return new DeleteGcmChannelResponse($result->toArray());
    }
}
