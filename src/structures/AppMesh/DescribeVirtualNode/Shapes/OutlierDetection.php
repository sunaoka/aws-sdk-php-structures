<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration $baseEjectionDuration
 * @property Duration $interval
 * @property int $maxEjectionPercent
 * @property int $maxServerErrors
 */
class OutlierDetection extends Shape
{
    /**
     * @param array{
     *     baseEjectionDuration: Duration,
     *     interval: Duration,
     *     maxEjectionPercent: int,
     *     maxServerErrors: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
