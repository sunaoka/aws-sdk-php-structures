<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $cpuCount
 * @property list<Disk>|null $disks
 * @property float|null $ramSizeInGb
 */
class InstanceHardware extends Shape
{
    /**
     * @param array{
     *     cpuCount?: int|null,
     *     disks?: list<Disk>|null,
     *     ramSizeInGb?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
