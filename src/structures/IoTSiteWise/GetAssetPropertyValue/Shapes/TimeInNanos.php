<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 9223372036854774> $timeInSeconds
 * @property int<0, 999999999>|null $offsetInNanos
 */
class TimeInNanos extends Shape
{
    /**
     * @param array{
     *     timeInSeconds: int<1, 9223372036854774>,
     *     offsetInNanos?: int<0, 999999999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
