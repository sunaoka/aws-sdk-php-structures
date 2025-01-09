<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerName
 */
class ClearTimerAction extends Shape
{
    /**
     * @param array{timerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
