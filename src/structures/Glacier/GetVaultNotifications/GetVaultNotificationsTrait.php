<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultNotifications;

trait GetVaultNotificationsTrait
{
    /**
     * @param GetVaultNotificationsRequest $args
     * @return GetVaultNotificationsResponse
     */
    public function getVaultNotifications(GetVaultNotificationsRequest $args)
    {
        $result = parent::getVaultNotifications($args->toArray());
        return new GetVaultNotificationsResponse($result->toArray());
    }
}
