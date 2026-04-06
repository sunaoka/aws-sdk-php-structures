<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Dimension>|null $Dimensions
 * @property string|null $Stat
 */
class SingleMetricAnomalyDetector extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Dimension>|null,
     *     Stat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
