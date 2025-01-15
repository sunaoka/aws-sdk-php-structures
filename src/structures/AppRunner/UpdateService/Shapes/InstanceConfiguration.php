<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cpu
 * @property string|null $Memory
 * @property string|null $InstanceRoleArn
 */
class InstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     Cpu?: string|null,
     *     Memory?: string|null,
     *     InstanceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
