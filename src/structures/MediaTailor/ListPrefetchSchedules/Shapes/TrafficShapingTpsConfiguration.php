<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PeakTps
 * @property int|null $PeakConcurrentUsers
 */
class TrafficShapingTpsConfiguration extends Shape
{
    /**
     * @param array{
     *     PeakTps?: int|null,
     *     PeakConcurrentUsers?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
