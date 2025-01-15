<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $From
 * @property int|null $To
 * @property int|null $Step
 */
class Range extends Shape
{
    /**
     * @param array{
     *     From?: int|null,
     *     To?: int|null,
     *     Step?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
