<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerName
 * @property int<1, 31622400> $seconds
 * @property string $durationExpression
 */
class SetTimerAction extends Shape
{
    /**
     * @param array{
     *     timerName: string,
     *     seconds?: int<1, 31622400>,
     *     durationExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
