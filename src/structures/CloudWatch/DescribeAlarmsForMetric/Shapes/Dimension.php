<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
