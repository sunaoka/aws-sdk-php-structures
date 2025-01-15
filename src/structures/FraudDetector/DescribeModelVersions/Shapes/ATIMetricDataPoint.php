<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $cr
 * @property float|null $adr
 * @property float|null $threshold
 * @property float|null $atodr
 */
class ATIMetricDataPoint extends Shape
{
    /**
     * @param array{
     *     cr?: float|null,
     *     adr?: float|null,
     *     threshold?: float|null,
     *     atodr?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
