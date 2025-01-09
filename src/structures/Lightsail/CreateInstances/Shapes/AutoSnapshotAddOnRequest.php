<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $snapshotTimeOfDay
 */
class AutoSnapshotAddOnRequest extends Shape
{
    /**
     * @param array{snapshotTimeOfDay?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
