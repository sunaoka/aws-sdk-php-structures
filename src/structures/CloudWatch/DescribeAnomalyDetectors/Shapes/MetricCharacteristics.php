<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $PeriodicSpikes
 */
class MetricCharacteristics extends Shape
{
    /**
     * @param array{PeriodicSpikes?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
