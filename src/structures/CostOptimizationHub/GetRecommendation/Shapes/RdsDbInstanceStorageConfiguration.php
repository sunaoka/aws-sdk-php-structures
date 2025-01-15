<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $storageType
 * @property double|null $allocatedStorageInGb
 * @property double|null $iops
 * @property double|null $storageThroughput
 */
class RdsDbInstanceStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageType?: string|null,
     *     allocatedStorageInGb?: double|null,
     *     iops?: double|null,
     *     storageThroughput?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
