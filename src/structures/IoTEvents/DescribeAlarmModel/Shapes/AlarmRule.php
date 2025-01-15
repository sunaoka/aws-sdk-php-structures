<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleRule|null $simpleRule
 */
class AlarmRule extends Shape
{
    /**
     * @param array{simpleRule?: SimpleRule|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
