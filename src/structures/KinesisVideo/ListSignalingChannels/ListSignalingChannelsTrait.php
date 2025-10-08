<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels;

trait ListSignalingChannelsTrait
{
    /**
     * @param ListSignalingChannelsRequest $args
     * @return ListSignalingChannelsResponse
     */
    public function listSignalingChannels(ListSignalingChannelsRequest $args)
    {
        $result = parent::listSignalingChannels($args->toArray());
        return new ListSignalingChannelsResponse($result->toArray());
    }
}
