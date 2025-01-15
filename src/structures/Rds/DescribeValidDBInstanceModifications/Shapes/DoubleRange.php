<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $From
 * @property double|null $To
 */
class DoubleRange extends Shape
{
    /**
     * @param array{
     *     From?: double|null,
     *     To?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
