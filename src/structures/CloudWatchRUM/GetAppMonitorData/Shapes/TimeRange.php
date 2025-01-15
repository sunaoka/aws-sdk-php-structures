<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitorData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $After
 * @property int|null $Before
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     After: int,
     *     Before?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
