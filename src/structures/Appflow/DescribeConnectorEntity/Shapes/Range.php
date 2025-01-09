<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $maximum
 * @property double $minimum
 */
class Range extends Shape
{
    /**
     * @param array{
     *     maximum?: double,
     *     minimum?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
