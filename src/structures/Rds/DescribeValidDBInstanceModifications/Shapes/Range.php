<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $From
 * @property int $To
 * @property int $Step
 */
class Range extends Shape
{
    /**
     * @param array{
     *     From?: int,
     *     To?: int,
     *     Step?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
