<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsVoipSandboxChannel;

trait DeleteApnsVoipSandboxChannelTrait
{
    /**
     * @param DeleteApnsVoipSandboxChannelRequest $args
     * @return DeleteApnsVoipSandboxChannelResponse
     */
    public function deleteApnsVoipSandboxChannel(DeleteApnsVoipSandboxChannelRequest $args)
    {
        $result = parent::deleteApnsVoipSandboxChannel($args->toArray());
        return new DeleteApnsVoipSandboxChannelResponse($result->toArray());
    }
}
