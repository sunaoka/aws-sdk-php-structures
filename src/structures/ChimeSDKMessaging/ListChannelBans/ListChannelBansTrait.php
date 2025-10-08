<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelBans;

trait ListChannelBansTrait
{
    /**
     * @param ListChannelBansRequest $args
     * @return ListChannelBansResponse
     */
    public function listChannelBans(ListChannelBansRequest $args)
    {
        $result = parent::listChannelBans($args->toArray());
        return new ListChannelBansResponse($result->toArray());
    }
}
