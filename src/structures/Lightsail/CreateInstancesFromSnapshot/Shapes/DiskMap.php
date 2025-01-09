<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $originalDiskPath
 * @property string $newDiskName
 */
class DiskMap extends Shape
{
    /**
     * @param array{
     *     originalDiskPath?: string,
     *     newDiskName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
