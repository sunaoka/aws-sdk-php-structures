<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerName
 * @property int $seconds
 * @property string $durationExpression
 */
class SetTimerAction extends Shape
{
    /**
     * @param array{
     *     timerName: string,
     *     seconds?: int,
     *     durationExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
