<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<MetricDimension>|null $Dimensions
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricName: string,
     *     Dimensions?: list<MetricDimension>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
