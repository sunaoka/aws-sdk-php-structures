<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerName
 * @property int<1, 31622400>|null $seconds
 * @property string|null $durationExpression
 */
class SetTimerAction extends Shape
{
    /**
     * @param array{
     *     timerName: string,
     *     seconds?: int<1, 31622400>|null,
     *     durationExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
