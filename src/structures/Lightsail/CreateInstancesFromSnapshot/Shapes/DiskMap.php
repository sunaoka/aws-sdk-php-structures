<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $originalDiskPath
 * @property string|null $newDiskName
 */
class DiskMap extends Shape
{
    /**
     * @param array{
     *     originalDiskPath?: string|null,
     *     newDiskName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
