<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerName
 */
class ResetTimerAction extends Shape
{
    /**
     * @param array{timerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
