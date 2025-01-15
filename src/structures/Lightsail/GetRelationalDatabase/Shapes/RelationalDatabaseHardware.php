<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $cpuCount
 * @property int|null $diskSizeInGb
 * @property float|null $ramSizeInGb
 */
class RelationalDatabaseHardware extends Shape
{
    /**
     * @param array{
     *     cpuCount?: int|null,
     *     diskSizeInGb?: int|null,
     *     ramSizeInGb?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
