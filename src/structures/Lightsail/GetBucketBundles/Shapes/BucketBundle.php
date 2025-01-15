<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bundleId
 * @property string|null $name
 * @property float|null $price
 * @property int|null $storagePerMonthInGb
 * @property int|null $transferPerMonthInGb
 * @property bool|null $isActive
 */
class BucketBundle extends Shape
{
    /**
     * @param array{
     *     bundleId?: string|null,
     *     name?: string|null,
     *     price?: float|null,
     *     storagePerMonthInGb?: int|null,
     *     transferPerMonthInGb?: int|null,
     *     isActive?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
