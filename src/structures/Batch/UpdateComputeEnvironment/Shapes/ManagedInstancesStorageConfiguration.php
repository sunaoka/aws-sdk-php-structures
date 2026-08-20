<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $storageSizeGiB
 */
class ManagedInstancesStorageConfiguration extends Shape
{
    /**
     * @param array{storageSizeGiB?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
