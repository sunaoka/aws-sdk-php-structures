<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bundleId
 * @property string|null $name
 * @property float|null $price
 * @property float|null $ramSizeInGb
 * @property int|null $diskSizeInGb
 * @property int|null $transferPerMonthInGb
 * @property int|null $cpuCount
 * @property bool|null $isEncrypted
 * @property bool|null $isActive
 */
class RelationalDatabaseBundle extends Shape
{
    /**
     * @param array{
     *     bundleId?: string|null,
     *     name?: string|null,
     *     price?: float|null,
     *     ramSizeInGb?: float|null,
     *     diskSizeInGb?: int|null,
     *     transferPerMonthInGb?: int|null,
     *     cpuCount?: int|null,
     *     isEncrypted?: bool|null,
     *     isActive?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
