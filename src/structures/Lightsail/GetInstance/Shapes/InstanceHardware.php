<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $cpuCount
 * @property list<Disk> $disks
 * @property float $ramSizeInGb
 */
class InstanceHardware extends Shape
{
    /**
     * @param array{
     *     cpuCount?: int,
     *     disks?: list<Disk>,
     *     ramSizeInGb?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
