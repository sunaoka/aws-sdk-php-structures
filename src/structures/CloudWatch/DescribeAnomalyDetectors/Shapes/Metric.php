<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Dimension>|null $Dimensions
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Dimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
