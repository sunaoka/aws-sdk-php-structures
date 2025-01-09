<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $After
 * @property int $Before
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     After: int,
     *     Before?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
