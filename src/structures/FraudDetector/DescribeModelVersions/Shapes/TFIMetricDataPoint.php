<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $fpr
 * @property float $precision
 * @property float $tpr
 * @property float $threshold
 */
class TFIMetricDataPoint extends Shape
{
    /**
     * @param array{
     *     fpr?: float,
     *     precision?: float,
     *     tpr?: float,
     *     threshold?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
