<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSmsChannel;

trait DeleteSmsChannelTrait
{
    /**
     * @param DeleteSmsChannelRequest $args
     * @return DeleteSmsChannelResponse
     */
    public function deleteSmsChannel(DeleteSmsChannelRequest $args)
    {
        $result = parent::deleteSmsChannel($args->toArray());
        return new DeleteSmsChannelResponse($result->toArray());
    }
}
