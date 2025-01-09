<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $cr
 * @property float $adr
 * @property float $threshold
 * @property float $atodr
 */
class ATIMetricDataPoint extends Shape
{
    /**
     * @param array{
     *     cr?: float,
     *     adr?: float,
     *     threshold?: float,
     *     atodr?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
