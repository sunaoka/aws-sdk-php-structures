<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class AcknowledgeFlow extends Shape
{
    /**
     * @param array{enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
