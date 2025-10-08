<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateSignalingChannel;

trait UpdateSignalingChannelTrait
{
    /**
     * @param UpdateSignalingChannelRequest $args
     * @return UpdateSignalingChannelResponse
     */
    public function updateSignalingChannel(UpdateSignalingChannelRequest $args)
    {
        $result = parent::updateSignalingChannel($args->toArray());
        return new UpdateSignalingChannelResponse($result->toArray());
    }
}
