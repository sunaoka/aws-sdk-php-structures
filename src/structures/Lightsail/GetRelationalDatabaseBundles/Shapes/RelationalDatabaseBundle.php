<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleId
 * @property string $name
 * @property float $price
 * @property float $ramSizeInGb
 * @property int $diskSizeInGb
 * @property int $transferPerMonthInGb
 * @property int $cpuCount
 * @property bool $isEncrypted
 * @property bool $isActive
 */
class RelationalDatabaseBundle extends Shape
{
    /**
     * @param array{
     *     bundleId?: string,
     *     name?: string,
     *     price?: float,
     *     ramSizeInGb?: float,
     *     diskSizeInGb?: int,
     *     transferPerMonthInGb?: int,
     *     cpuCount?: int,
     *     isEncrypted?: bool,
     *     isActive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
