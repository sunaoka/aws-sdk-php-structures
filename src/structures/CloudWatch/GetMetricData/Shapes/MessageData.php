<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Value
 */
class MessageData extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
