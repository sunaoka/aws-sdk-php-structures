<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListChannels;

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
