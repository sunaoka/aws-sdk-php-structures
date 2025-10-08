<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApnsSandboxChannel;

trait UpdateApnsSandboxChannelTrait
{
    /**
     * @param UpdateApnsSandboxChannelRequest $args
     * @return UpdateApnsSandboxChannelResponse
     */
    public function updateApnsSandboxChannel(UpdateApnsSandboxChannelRequest $args)
    {
        $result = parent::updateApnsSandboxChannel($args->toArray());
        return new UpdateApnsSandboxChannelResponse($result->toArray());
    }
}
