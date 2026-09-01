<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel;

trait UpdateChannelTrait
{
    /**
     * @param UpdateChannelRequest $args
     * @return UpdateChannelResponse
     */
    public function updateChannel(UpdateChannelRequest $args)
    {
        $result = parent::updateChannel($args->toArray());
        return new UpdateChannelResponse($result->toArray());
    }
}
