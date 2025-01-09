<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Reboot $reboot
 * @property Unlock $unlock
 */
class Command extends Shape
{
    /**
     * @param array{
     *     reboot?: Reboot,
     *     unlock?: Unlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
