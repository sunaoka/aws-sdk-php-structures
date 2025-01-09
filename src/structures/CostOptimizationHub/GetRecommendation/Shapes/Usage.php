<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $usageType
 * @property double $usageAmount
 * @property string $operation
 * @property string $productCode
 * @property string $unit
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     usageType?: string,
     *     usageAmount?: double,
     *     operation?: string,
     *     productCode?: string,
     *     unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
