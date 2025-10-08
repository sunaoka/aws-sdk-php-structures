<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsVoipSandboxChannel;

trait GetApnsVoipSandboxChannelTrait
{
    /**
     * @param GetApnsVoipSandboxChannelRequest $args
     * @return GetApnsVoipSandboxChannelResponse
     */
    public function getApnsVoipSandboxChannel(GetApnsVoipSandboxChannelRequest $args)
    {
        $result = parent::getApnsVoipSandboxChannel($args->toArray());
        return new GetApnsVoipSandboxChannelResponse($result->toArray());
    }
}
