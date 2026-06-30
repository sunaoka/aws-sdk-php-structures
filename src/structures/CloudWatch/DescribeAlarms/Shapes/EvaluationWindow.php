<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WallClockWindow|null $WallClockWindow
 * @property SlidingWindow|null $SlidingWindow
 */
class EvaluationWindow extends Shape
{
    /**
     * @param array{
     *     WallClockWindow?: WallClockWindow|null,
     *     SlidingWindow?: SlidingWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
