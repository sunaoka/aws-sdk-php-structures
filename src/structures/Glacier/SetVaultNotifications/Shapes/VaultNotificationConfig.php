<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SNSTopic
 * @property list<string>|null $Events
 */
class VaultNotificationConfig extends Shape
{
    /**
     * @param array{
     *     SNSTopic?: string|null,
     *     Events?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
