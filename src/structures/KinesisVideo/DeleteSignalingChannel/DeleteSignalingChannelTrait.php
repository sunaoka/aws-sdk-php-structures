<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DeleteSignalingChannel;

trait DeleteSignalingChannelTrait
{
    /**
     * @param DeleteSignalingChannelRequest $args
     * @return DeleteSignalingChannelResponse
     */
    public function deleteSignalingChannel(DeleteSignalingChannelRequest $args)
    {
        $result = parent::deleteSignalingChannel($args->toArray());
        return new DeleteSignalingChannelResponse($result->toArray());
    }
}
