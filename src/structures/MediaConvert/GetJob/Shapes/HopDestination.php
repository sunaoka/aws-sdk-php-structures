<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-50, 50> $Priority
 * @property string $Queue
 * @property int $WaitMinutes
 */
class HopDestination extends Shape
{
    /**
     * @param array{
     *     Priority?: int<-50, 50>,
     *     Queue?: string,
     *     WaitMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
