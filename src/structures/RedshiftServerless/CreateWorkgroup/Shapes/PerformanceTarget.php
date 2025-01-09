<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $level
 * @property 'ENABLED'|'DISABLED' $status
 */
class PerformanceTarget extends Shape
{
    /**
     * @param array{
     *     level?: int,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
