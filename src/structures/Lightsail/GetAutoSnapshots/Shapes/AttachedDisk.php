<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 * @property int|null $sizeInGb
 */
class AttachedDisk extends Shape
{
    /**
     * @param array{
     *     path?: string|null,
     *     sizeInGb?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
