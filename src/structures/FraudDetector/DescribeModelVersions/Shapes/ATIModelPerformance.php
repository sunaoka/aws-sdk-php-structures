<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $asi
 */
class ATIModelPerformance extends Shape
{
    /**
     * @param array{asi?: float} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
