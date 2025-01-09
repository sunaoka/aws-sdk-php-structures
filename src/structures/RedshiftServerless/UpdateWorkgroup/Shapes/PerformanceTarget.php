<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $level
 * @property 'ENABLED'|'DISABLED' $status
 */
class PerformanceTarget extends Shape
{
    /**
     * @param array{
     *     level?: int<1, 100>,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
