<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteEmailChannel;

trait DeleteEmailChannelTrait
{
    /**
     * @param DeleteEmailChannelRequest $args
     * @return DeleteEmailChannelResponse
     */
    public function deleteEmailChannel(DeleteEmailChannelRequest $args)
    {
        $result = parent::deleteEmailChannel($args->toArray());
        return new DeleteEmailChannelResponse($result->toArray());
    }
}
