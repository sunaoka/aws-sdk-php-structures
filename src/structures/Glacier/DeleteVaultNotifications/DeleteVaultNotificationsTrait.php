<?php

namespace Sunaoka\Aws\Structures\Glacier\DeleteVaultNotifications;

trait DeleteVaultNotificationsTrait
{
    /**
     * @param DeleteVaultNotificationsRequest $args
     * @return void
     */
    public function deleteVaultNotifications(DeleteVaultNotificationsRequest $args)
    {
        parent::deleteVaultNotifications($args->toArray());
    }
}
