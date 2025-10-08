<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateGcmChannel;

trait UpdateGcmChannelTrait
{
    /**
     * @param UpdateGcmChannelRequest $args
     * @return UpdateGcmChannelResponse
     */
    public function updateGcmChannel(UpdateGcmChannelRequest $args)
    {
        $result = parent::updateGcmChannel($args->toArray());
        return new UpdateGcmChannelResponse($result->toArray());
    }
}
