<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsSandboxChannel;

trait DeleteApnsSandboxChannelTrait
{
    /**
     * @param DeleteApnsSandboxChannelRequest $args
     * @return DeleteApnsSandboxChannelResponse
     */
    public function deleteApnsSandboxChannel(DeleteApnsSandboxChannelRequest $args)
    {
        $result = parent::deleteApnsSandboxChannel($args->toArray());
        return new DeleteApnsSandboxChannelResponse($result->toArray());
    }
}
