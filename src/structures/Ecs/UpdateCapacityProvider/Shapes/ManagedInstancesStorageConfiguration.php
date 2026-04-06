<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $storageSizeGiB
 */
class ManagedInstancesStorageConfiguration extends Shape
{
    /**
     * @param array{storageSizeGiB?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
