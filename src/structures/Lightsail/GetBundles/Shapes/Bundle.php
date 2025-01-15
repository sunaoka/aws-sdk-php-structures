<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $price
 * @property int|null $cpuCount
 * @property int|null $diskSizeInGb
 * @property string|null $bundleId
 * @property string|null $instanceType
 * @property bool|null $isActive
 * @property string|null $name
 * @property int|null $power
 * @property float|null $ramSizeInGb
 * @property int|null $transferPerMonthInGb
 * @property list<'LINUX_UNIX'|'WINDOWS'>|null $supportedPlatforms
 * @property list<'LfR'>|null $supportedAppCategories
 * @property int|null $publicIpv4AddressCount
 */
class Bundle extends Shape
{
    /**
     * @param array{
     *     price?: float|null,
     *     cpuCount?: int|null,
     *     diskSizeInGb?: int|null,
     *     bundleId?: string|null,
     *     instanceType?: string|null,
     *     isActive?: bool|null,
     *     name?: string|null,
     *     power?: int|null,
     *     ramSizeInGb?: float|null,
     *     transferPerMonthInGb?: int|null,
     *     supportedPlatforms?: list<'LINUX_UNIX'|'WINDOWS'>|null,
     *     supportedAppCategories?: list<'LfR'>|null,
     *     publicIpv4AddressCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
