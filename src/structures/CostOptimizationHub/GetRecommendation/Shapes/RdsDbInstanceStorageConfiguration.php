<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageType
 * @property double $allocatedStorageInGb
 * @property double $iops
 * @property double $storageThroughput
 */
class RdsDbInstanceStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageType?: string,
     *     allocatedStorageInGb?: double,
     *     iops?: double,
     *     storageThroughput?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
