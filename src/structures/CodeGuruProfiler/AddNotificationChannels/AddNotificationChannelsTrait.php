<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\AddNotificationChannels;

trait AddNotificationChannelsTrait
{
    /**
     * @param AddNotificationChannelsRequest $args
     * @return AddNotificationChannelsResponse
     */
    public function addNotificationChannels(AddNotificationChannelsRequest $args)
    {
        $result = parent::addNotificationChannels($args->toArray());
        return new AddNotificationChannelsResponse($result->toArray());
    }
}
