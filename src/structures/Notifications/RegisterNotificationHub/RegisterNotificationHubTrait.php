<?php

namespace Sunaoka\Aws\Structures\Notifications\RegisterNotificationHub;

trait RegisterNotificationHubTrait
{
    /**
     * @param RegisterNotificationHubRequest $args
     * @return RegisterNotificationHubResponse
     */
    public function registerNotificationHub(RegisterNotificationHubRequest $args)
    {
        $result = parent::registerNotificationHub($args->toArray());
        return new RegisterNotificationHubResponse($result->toArray());
    }
}
