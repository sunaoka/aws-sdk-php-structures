<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $auc
 * @property UncertaintyRange|null $uncertaintyRange
 */
class TFIModelPerformance extends Shape
{
    /**
     * @param array{
     *     auc?: float|null,
     *     uncertaintyRange?: UncertaintyRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
