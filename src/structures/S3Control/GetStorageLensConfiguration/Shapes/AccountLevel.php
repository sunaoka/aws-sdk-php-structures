<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityMetrics $ActivityMetrics
 * @property BucketLevel $BucketLevel
 * @property AdvancedCostOptimizationMetrics $AdvancedCostOptimizationMetrics
 * @property AdvancedDataProtectionMetrics $AdvancedDataProtectionMetrics
 * @property DetailedStatusCodesMetrics $DetailedStatusCodesMetrics
 * @property StorageLensGroupLevel $StorageLensGroupLevel
 */
class AccountLevel extends Shape
{
    /**
     * @param array{
     *     ActivityMetrics?: ActivityMetrics,
     *     BucketLevel: BucketLevel,
     *     AdvancedCostOptimizationMetrics?: AdvancedCostOptimizationMetrics,
     *     AdvancedDataProtectionMetrics?: AdvancedDataProtectionMetrics,
     *     DetailedStatusCodesMetrics?: DetailedStatusCodesMetrics,
     *     StorageLensGroupLevel?: StorageLensGroupLevel
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
