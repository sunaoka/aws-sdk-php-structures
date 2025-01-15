<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $usageType
 * @property double|null $usageAmount
 * @property string|null $operation
 * @property string|null $productCode
 * @property string|null $unit
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     usageType?: string|null,
     *     usageAmount?: double|null,
     *     operation?: string|null,
     *     productCode?: string|null,
     *     unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
