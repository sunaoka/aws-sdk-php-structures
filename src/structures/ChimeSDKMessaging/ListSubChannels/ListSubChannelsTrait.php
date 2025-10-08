<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListSubChannels;

trait ListSubChannelsTrait
{
    /**
     * @param ListSubChannelsRequest $args
     * @return ListSubChannelsResponse
     */
    public function listSubChannels(ListSubChannelsRequest $args)
    {
        $result = parent::listSubChannels($args->toArray());
        return new ListSubChannelsResponse($result->toArray());
    }
}
