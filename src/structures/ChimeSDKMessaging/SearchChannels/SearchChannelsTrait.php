<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SearchChannels;

trait SearchChannelsTrait
{
    /**
     * @param SearchChannelsRequest $args
     * @return SearchChannelsResponse
     */
    public function searchChannels(SearchChannelsRequest $args)
    {
        $result = parent::searchChannels($args->toArray());
        return new SearchChannelsResponse($result->toArray());
    }
}
