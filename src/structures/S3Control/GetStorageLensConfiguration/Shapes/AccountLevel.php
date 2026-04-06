<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityMetrics|null $ActivityMetrics
 * @property BucketLevel $BucketLevel
 * @property AdvancedCostOptimizationMetrics|null $AdvancedCostOptimizationMetrics
 * @property AdvancedDataProtectionMetrics|null $AdvancedDataProtectionMetrics
 * @property DetailedStatusCodesMetrics|null $DetailedStatusCodesMetrics
 * @property AdvancedPerformanceMetrics|null $AdvancedPerformanceMetrics
 * @property StorageLensGroupLevel|null $StorageLensGroupLevel
 */
class AccountLevel extends Shape
{
    /**
     * @param array{
     *     ActivityMetrics?: ActivityMetrics|null,
     *     BucketLevel: BucketLevel,
     *     AdvancedCostOptimizationMetrics?: AdvancedCostOptimizationMetrics|null,
     *     AdvancedDataProtectionMetrics?: AdvancedDataProtectionMetrics|null,
     *     DetailedStatusCodesMetrics?: DetailedStatusCodesMetrics|null,
     *     AdvancedPerformanceMetrics?: AdvancedPerformanceMetrics|null,
     *     StorageLensGroupLevel?: StorageLensGroupLevel|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
