<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsChannel;

trait DeleteApnsChannelTrait
{
    /**
     * @param DeleteApnsChannelRequest $args
     * @return DeleteApnsChannelResponse
     */
    public function deleteApnsChannel(DeleteApnsChannelRequest $args)
    {
        $result = parent::deleteApnsChannel($args->toArray());
        return new DeleteApnsChannelResponse($result->toArray());
    }
}
