<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultNotifications;

trait PutBackupVaultNotificationsTrait
{
    /**
     * @param PutBackupVaultNotificationsRequest $args
     * @return void
     */
    public function putBackupVaultNotifications(PutBackupVaultNotificationsRequest $args)
    {
        parent::putBackupVaultNotifications($args->toArray());
    }
}
