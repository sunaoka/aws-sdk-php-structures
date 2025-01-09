<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleRule $simpleRule
 */
class AlarmRule extends Shape
{
    /**
     * @param array{simpleRule?: SimpleRule} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
