<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityMetrics $ActivityMetrics
 * @property PrefixLevel $PrefixLevel
 * @property AdvancedCostOptimizationMetrics $AdvancedCostOptimizationMetrics
 * @property AdvancedDataProtectionMetrics $AdvancedDataProtectionMetrics
 * @property DetailedStatusCodesMetrics $DetailedStatusCodesMetrics
 */
class BucketLevel extends Shape
{
    /**
     * @param array{
     *     ActivityMetrics?: ActivityMetrics,
     *     PrefixLevel?: PrefixLevel,
     *     AdvancedCostOptimizationMetrics?: AdvancedCostOptimizationMetrics,
     *     AdvancedDataProtectionMetrics?: AdvancedDataProtectionMetrics,
     *     DetailedStatusCodesMetrics?: DetailedStatusCodesMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
