<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsVoipChannel;

trait DeleteApnsVoipChannelTrait
{
    /**
     * @param DeleteApnsVoipChannelRequest $args
     * @return DeleteApnsVoipChannelResponse
     */
    public function deleteApnsVoipChannel(DeleteApnsVoipChannelRequest $args)
    {
        $result = parent::deleteApnsVoipChannel($args->toArray());
        return new DeleteApnsVoipChannelResponse($result->toArray());
    }
}
