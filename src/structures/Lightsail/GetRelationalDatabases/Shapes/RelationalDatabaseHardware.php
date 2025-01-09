<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $cpuCount
 * @property int $diskSizeInGb
 * @property float $ramSizeInGb
 */
class RelationalDatabaseHardware extends Shape
{
    /**
     * @param array{
     *     cpuCount?: int,
     *     diskSizeInGb?: int,
     *     ramSizeInGb?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
