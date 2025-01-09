<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class AcceleratorEvent extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
