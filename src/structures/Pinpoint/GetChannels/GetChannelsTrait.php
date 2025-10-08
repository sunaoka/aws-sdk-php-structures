<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetChannels;

trait GetChannelsTrait
{
    /**
     * @param GetChannelsRequest $args
     * @return GetChannelsResponse
     */
    public function getChannels(GetChannelsRequest $args)
    {
        $result = parent::getChannels($args->toArray());
        return new GetChannelsResponse($result->toArray());
    }
}
