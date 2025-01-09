<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property string $Queue
 * @property int $WaitMinutes
 */
class HopDestination extends Shape
{
    /**
     * @param array{
     *     Priority?: int,
     *     Queue?: string,
     *     WaitMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
