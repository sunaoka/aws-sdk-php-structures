<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-50, 50>|null $Priority
 * @property string|null $Queue
 * @property int|null $WaitMinutes
 */
class HopDestination extends Shape
{
    /**
     * @param array{
     *     Priority?: int<-50, 50>|null,
     *     Queue?: string|null,
     *     WaitMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
