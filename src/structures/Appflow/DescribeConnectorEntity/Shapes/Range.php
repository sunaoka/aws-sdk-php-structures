<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $maximum
 * @property double|null $minimum
 */
class Range extends Shape
{
    /**
     * @param array{
     *     maximum?: double|null,
     *     minimum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
