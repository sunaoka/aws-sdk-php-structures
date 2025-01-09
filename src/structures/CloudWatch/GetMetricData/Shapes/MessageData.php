<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Value
 */
class MessageData extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
