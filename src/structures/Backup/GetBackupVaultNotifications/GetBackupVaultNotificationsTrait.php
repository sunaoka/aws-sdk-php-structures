<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupVaultNotifications;

trait GetBackupVaultNotificationsTrait
{
    /**
     * @param GetBackupVaultNotificationsRequest $args
     * @return GetBackupVaultNotificationsResponse
     */
    public function getBackupVaultNotifications(GetBackupVaultNotificationsRequest $args)
    {
        $result = parent::getBackupVaultNotifications($args->toArray());
        return new GetBackupVaultNotificationsResponse($result->toArray());
    }
}
