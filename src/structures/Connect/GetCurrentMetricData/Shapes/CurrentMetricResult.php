<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Dimensions|null $Dimensions
 * @property list<CurrentMetricData>|null $Collections
 */
class CurrentMetricResult extends Shape
{
    /**
     * @param array{
     *     Dimensions?: Dimensions|null,
     *     Collections?: list<CurrentMetricData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
