<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $price
 * @property int $cpuCount
 * @property int $diskSizeInGb
 * @property string $bundleId
 * @property string $instanceType
 * @property bool $isActive
 * @property string $name
 * @property int $power
 * @property float $ramSizeInGb
 * @property int $transferPerMonthInGb
 * @property list<'LINUX_UNIX'|'WINDOWS'> $supportedPlatforms
 * @property list<'LfR'> $supportedAppCategories
 * @property int $publicIpv4AddressCount
 */
class Bundle extends Shape
{
    /**
     * @param array{
     *     price?: float,
     *     cpuCount?: int,
     *     diskSizeInGb?: int,
     *     bundleId?: string,
     *     instanceType?: string,
     *     isActive?: bool,
     *     name?: string,
     *     power?: int,
     *     ramSizeInGb?: float,
     *     transferPerMonthInGb?: int,
     *     supportedPlatforms?: list<'LINUX_UNIX'|'WINDOWS'>,
     *     supportedAppCategories?: list<'LfR'>,
     *     publicIpv4AddressCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
