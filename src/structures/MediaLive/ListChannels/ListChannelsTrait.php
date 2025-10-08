<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels;

trait ListChannelsTrait
{
    /**
     * @param ListChannelsRequest $args
     * @return ListChannelsResponse
     */
    public function listChannels(ListChannelsRequest $args)
    {
        $result = parent::listChannels($args->toArray());
        return new ListChannelsResponse($result->toArray());
    }
}
