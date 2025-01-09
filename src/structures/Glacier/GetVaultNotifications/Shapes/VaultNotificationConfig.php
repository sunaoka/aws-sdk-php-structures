<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SNSTopic
 * @property list<string> $Events
 */
class VaultNotificationConfig extends Shape
{
    /**
     * @param array{
     *     SNSTopic?: string,
     *     Events?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
