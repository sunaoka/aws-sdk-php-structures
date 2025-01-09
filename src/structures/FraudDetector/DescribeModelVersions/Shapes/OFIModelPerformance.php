<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $auc
 * @property UncertaintyRange $uncertaintyRange
 */
class OFIModelPerformance extends Shape
{
    /**
     * @param array{
     *     auc?: float,
     *     uncertaintyRange?: UncertaintyRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
