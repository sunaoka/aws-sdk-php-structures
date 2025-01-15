<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class AcceleratorEvent extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
