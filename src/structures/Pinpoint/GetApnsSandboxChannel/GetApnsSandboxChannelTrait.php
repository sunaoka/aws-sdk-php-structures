<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsSandboxChannel;

trait GetApnsSandboxChannelTrait
{
    /**
     * @param GetApnsSandboxChannelRequest $args
     * @return GetApnsSandboxChannelResponse
     */
    public function getApnsSandboxChannel(GetApnsSandboxChannelRequest $args)
    {
        $result = parent::getApnsSandboxChannel($args->toArray());
        return new GetApnsSandboxChannelResponse($result->toArray());
    }
}
