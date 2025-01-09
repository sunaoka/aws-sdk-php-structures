<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property int $sizeInGb
 */
class AttachedDisk extends Shape
{
    /**
     * @param array{
     *     path?: string,
     *     sizeInGb?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
