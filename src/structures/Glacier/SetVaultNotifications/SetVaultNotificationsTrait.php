<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultNotifications;

trait SetVaultNotificationsTrait
{
    /**
     * @param SetVaultNotificationsRequest $args
     * @return void
     */
    public function setVaultNotifications(SetVaultNotificationsRequest $args)
    {
        parent::setVaultNotifications($args->toArray());
    }
}
