<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeInSeconds
 * @property int $offsetInNanos
 */
class TimeInNanos extends Shape
{
    /**
     * @param array{
     *     timeInSeconds: int,
     *     offsetInNanos?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
