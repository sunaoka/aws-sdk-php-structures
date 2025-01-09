<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDisk\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $status
 * @property string $snapshotTimeOfDay
 * @property string $nextSnapshotTimeOfDay
 * @property string $threshold
 * @property string $duration
 */
class AddOn extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     status?: string,
     *     snapshotTimeOfDay?: string,
     *     nextSnapshotTimeOfDay?: string,
     *     threshold?: string,
     *     duration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
