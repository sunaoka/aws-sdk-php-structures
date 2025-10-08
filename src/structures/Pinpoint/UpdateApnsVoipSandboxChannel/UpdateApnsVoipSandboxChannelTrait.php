<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsVoipSandboxChannel;

trait UpdateApnsVoipSandboxChannelTrait
{
    /**
     * @param UpdateApnsVoipSandboxChannelRequest $args
     * @return UpdateApnsVoipSandboxChannelResponse
     */
    public function updateApnsVoipSandboxChannel(UpdateApnsVoipSandboxChannelRequest $args)
    {
        $result = parent::updateApnsVoipSandboxChannel($args->toArray());
        return new UpdateApnsVoipSandboxChannelResponse($result->toArray());
    }
}
