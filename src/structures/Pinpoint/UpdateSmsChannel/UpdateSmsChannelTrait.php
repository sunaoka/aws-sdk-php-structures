<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsChannel;

trait UpdateSmsChannelTrait
{
    /**
     * @param UpdateSmsChannelRequest $args
     * @return UpdateSmsChannelResponse
     */
    public function updateSmsChannel(UpdateSmsChannelRequest $args)
    {
        $result = parent::updateSmsChannel($args->toArray());
        return new UpdateSmsChannelResponse($result->toArray());
    }
}
