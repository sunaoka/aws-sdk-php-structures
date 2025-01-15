<?php

namespace Sunaoka\Aws\Structures\Lightsail\EnableAddOn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $snapshotTimeOfDay
 */
class AutoSnapshotAddOnRequest extends Shape
{
    /**
     * @param array{snapshotTimeOfDay?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
