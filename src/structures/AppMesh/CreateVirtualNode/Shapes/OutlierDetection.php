<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration $baseEjectionDuration
 * @property Duration $interval
 * @property int<0, 100> $maxEjectionPercent
 * @property int<1, max> $maxServerErrors
 */
class OutlierDetection extends Shape
{
    /**
     * @param array{
     *     baseEjectionDuration: Duration,
     *     interval: Duration,
     *     maxEjectionPercent: int<0, 100>,
     *     maxServerErrors: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
