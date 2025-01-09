<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleId
 * @property string $name
 * @property float $price
 * @property int $storagePerMonthInGb
 * @property int $transferPerMonthInGb
 * @property bool $isActive
 */
class BucketBundle extends Shape
{
    /**
     * @param array{
     *     bundleId?: string,
     *     name?: string,
     *     price?: float,
     *     storagePerMonthInGb?: int,
     *     transferPerMonthInGb?: int,
     *     isActive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
