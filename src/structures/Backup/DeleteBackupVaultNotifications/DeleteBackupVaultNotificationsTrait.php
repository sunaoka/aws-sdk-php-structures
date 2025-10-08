<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultNotifications;

trait DeleteBackupVaultNotificationsTrait
{
    /**
     * @param DeleteBackupVaultNotificationsRequest $args
     * @return void
     */
    public function deleteBackupVaultNotifications(DeleteBackupVaultNotificationsRequest $args)
    {
        parent::deleteBackupVaultNotifications($args->toArray());
    }
}
