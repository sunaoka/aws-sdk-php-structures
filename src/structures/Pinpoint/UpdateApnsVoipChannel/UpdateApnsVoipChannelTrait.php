<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsVoipChannel;

trait UpdateApnsVoipChannelTrait
{
    /**
     * @param UpdateApnsVoipChannelRequest $args
     * @return UpdateApnsVoipChannelResponse
     */
    public function updateApnsVoipChannel(UpdateApnsVoipChannelRequest $args)
    {
        $result = parent::updateApnsVoipChannel($args->toArray());
        return new UpdateApnsVoipChannelResponse($result->toArray());
    }
}
