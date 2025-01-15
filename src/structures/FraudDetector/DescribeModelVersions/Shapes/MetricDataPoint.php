<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $fpr
 * @property float|null $precision
 * @property float|null $tpr
 * @property float|null $threshold
 */
class MetricDataPoint extends Shape
{
    /**
     * @param array{
     *     fpr?: float|null,
     *     precision?: float|null,
     *     tpr?: float|null,
     *     threshold?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
