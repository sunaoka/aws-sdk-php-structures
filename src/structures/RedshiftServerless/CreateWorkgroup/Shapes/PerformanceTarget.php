<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $level
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class PerformanceTarget extends Shape
{
    /**
     * @param array{
     *     level?: int<1, 100>|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
