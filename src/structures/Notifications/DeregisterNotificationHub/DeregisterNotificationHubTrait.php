<?php

namespace Sunaoka\Aws\Structures\Notifications\DeregisterNotificationHub;

trait DeregisterNotificationHubTrait
{
    /**
     * @param DeregisterNotificationHubRequest $args
     * @return DeregisterNotificationHubResponse
     */
    public function deregisterNotificationHub(DeregisterNotificationHubRequest $args)
    {
        $result = parent::deregisterNotificationHub($args->toArray());
        return new DeregisterNotificationHubResponse($result->toArray());
    }
}
