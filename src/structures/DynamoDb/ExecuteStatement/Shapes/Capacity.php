<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ReadCapacityUnits
 * @property double|null $WriteCapacityUnits
 * @property double|null $CapacityUnits
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     ReadCapacityUnits?: double|null,
     *     WriteCapacityUnits?: double|null,
     *     CapacityUnits?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
