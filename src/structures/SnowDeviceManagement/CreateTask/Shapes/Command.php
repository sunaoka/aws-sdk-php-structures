<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Reboot|null $reboot
 * @property Unlock|null $unlock
 */
class Command extends Shape
{
    /**
     * @param array{
     *     reboot?: Reboot|null,
     *     unlock?: Unlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
