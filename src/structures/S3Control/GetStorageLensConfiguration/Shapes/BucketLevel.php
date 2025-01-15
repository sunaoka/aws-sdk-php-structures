<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityMetrics|null $ActivityMetrics
 * @property PrefixLevel|null $PrefixLevel
 * @property AdvancedCostOptimizationMetrics|null $AdvancedCostOptimizationMetrics
 * @property AdvancedDataProtectionMetrics|null $AdvancedDataProtectionMetrics
 * @property DetailedStatusCodesMetrics|null $DetailedStatusCodesMetrics
 */
class BucketLevel extends Shape
{
    /**
     * @param array{
     *     ActivityMetrics?: ActivityMetrics|null,
     *     PrefixLevel?: PrefixLevel|null,
     *     AdvancedCostOptimizationMetrics?: AdvancedCostOptimizationMetrics|null,
     *     AdvancedDataProtectionMetrics?: AdvancedDataProtectionMetrics|null,
     *     DetailedStatusCodesMetrics?: DetailedStatusCodesMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
