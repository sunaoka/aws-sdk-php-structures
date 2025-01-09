<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Dimension> $Dimensions
 * @property string $Stat
 */
class SingleMetricAnomalyDetector extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Dimension>,
     *     Stat?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
