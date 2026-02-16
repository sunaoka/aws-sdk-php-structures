<?php

namespace Sunaoka\Aws\Structures\Connect\SearchNotifications;

trait SearchNotificationsTrait
{
    /**
     * @param SearchNotificationsRequest $args
     * @return SearchNotificationsResponse
     */
    public function searchNotifications(SearchNotificationsRequest $args)
    {
        $result = parent::searchNotifications($args->toArray());
        return new SearchNotificationsResponse($result->toArray());
    }
}
