<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleId
 * @property string $name
 * @property float $price
 * @property int $transferPerMonthInGb
 * @property bool $isActive
 */
class DistributionBundle extends Shape
{
    /**
     * @param array{
     *     bundleId?: string,
     *     name?: string,
     *     price?: float,
     *     transferPerMonthInGb?: int,
     *     isActive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
