<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $status
 * @property string|null $snapshotTimeOfDay
 * @property string|null $nextSnapshotTimeOfDay
 * @property string|null $threshold
 * @property string|null $duration
 */
class AddOn extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: string|null,
     *     snapshotTimeOfDay?: string|null,
     *     nextSnapshotTimeOfDay?: string|null,
     *     threshold?: string|null,
     *     duration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
