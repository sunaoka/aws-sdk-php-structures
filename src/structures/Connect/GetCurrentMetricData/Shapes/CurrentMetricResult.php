<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Dimensions $Dimensions
 * @property list<CurrentMetricData> $Collections
 */
class CurrentMetricResult extends Shape
{
    /**
     * @param array{
     *     Dimensions?: Dimensions,
     *     Collections?: list<CurrentMetricData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
