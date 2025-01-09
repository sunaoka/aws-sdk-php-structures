<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property Shapes\VaultNotificationConfig $vaultNotificationConfig
 */
class SetVaultNotificationsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     vaultNotificationConfig?: Shapes\VaultNotificationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
