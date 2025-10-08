<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsVoipChannel;

trait GetApnsVoipChannelTrait
{
    /**
     * @param GetApnsVoipChannelRequest $args
     * @return GetApnsVoipChannelResponse
     */
    public function getApnsVoipChannel(GetApnsVoipChannelRequest $args)
    {
        $result = parent::getApnsVoipChannel($args->toArray());
        return new GetApnsVoipChannelResponse($result->toArray());
    }
}
