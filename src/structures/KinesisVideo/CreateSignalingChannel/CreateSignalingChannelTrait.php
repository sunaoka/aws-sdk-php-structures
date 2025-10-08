<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateSignalingChannel;

trait CreateSignalingChannelTrait
{
    /**
     * @param CreateSignalingChannelRequest $args
     * @return CreateSignalingChannelResponse
     */
    public function createSignalingChannel(CreateSignalingChannelRequest $args)
    {
        $result = parent::createSignalingChannel($args->toArray());
        return new CreateSignalingChannelResponse($result->toArray());
    }
}
