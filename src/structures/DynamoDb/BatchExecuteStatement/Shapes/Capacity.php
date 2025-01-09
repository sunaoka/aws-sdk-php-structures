<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ReadCapacityUnits
 * @property double $WriteCapacityUnits
 * @property double $CapacityUnits
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     ReadCapacityUnits?: double,
     *     WriteCapacityUnits?: double,
     *     CapacityUnits?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
