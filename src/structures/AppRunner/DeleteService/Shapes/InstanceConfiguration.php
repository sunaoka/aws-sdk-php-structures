<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cpu
 * @property string $Memory
 * @property string $InstanceRoleArn
 */
class InstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     Cpu?: string,
     *     Memory?: string,
     *     InstanceRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
