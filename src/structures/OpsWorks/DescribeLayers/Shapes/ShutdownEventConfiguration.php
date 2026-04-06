<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ExecutionTimeout
 * @property bool|null $DelayUntilElbConnectionsDrained
 */
class ShutdownEventConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionTimeout?: int|null,
     *     DelayUntilElbConnectionsDrained?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
