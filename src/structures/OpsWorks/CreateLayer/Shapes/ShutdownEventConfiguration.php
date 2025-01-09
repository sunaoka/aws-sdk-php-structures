<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ExecutionTimeout
 * @property bool $DelayUntilElbConnectionsDrained
 */
class ShutdownEventConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionTimeout?: int,
     *     DelayUntilElbConnectionsDrained?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
