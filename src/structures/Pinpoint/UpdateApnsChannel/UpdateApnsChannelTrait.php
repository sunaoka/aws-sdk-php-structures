<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsChannel;

trait UpdateApnsChannelTrait
{
    /**
     * @param UpdateApnsChannelRequest $args
     * @return UpdateApnsChannelResponse
     */
    public function updateApnsChannel(UpdateApnsChannelRequest $args)
    {
        $result = parent::updateApnsChannel($args->toArray());
        return new UpdateApnsChannelResponse($result->toArray());
    }
}
