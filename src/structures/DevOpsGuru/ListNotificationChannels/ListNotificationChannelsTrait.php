<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels;

trait ListNotificationChannelsTrait
{
    /**
     * @param ListNotificationChannelsRequest $args
     * @return ListNotificationChannelsResponse
     */
    public function listNotificationChannels(ListNotificationChannelsRequest $args)
    {
        $result = parent::listNotificationChannels($args->toArray());
        return new ListNotificationChannelsResponse($result->toArray());
    }
}
