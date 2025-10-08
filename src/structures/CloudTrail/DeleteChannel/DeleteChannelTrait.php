<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteChannel;

trait DeleteChannelTrait
{
    /**
     * @param DeleteChannelRequest $args
     * @return DeleteChannelResponse
     */
    public function deleteChannel(DeleteChannelRequest $args)
    {
        $result = parent::deleteChannel($args->toArray());
        return new DeleteChannelResponse($result->toArray());
    }
}
