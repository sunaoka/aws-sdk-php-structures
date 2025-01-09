<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $lowerBoundValue
 * @property float $upperBoundValue
 */
class UncertaintyRange extends Shape
{
    /**
     * @param array{
     *     lowerBoundValue: float,
     *     upperBoundValue: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
