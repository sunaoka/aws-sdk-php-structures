<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageCapacity
 */
class FileCacheLustreMetadataConfiguration extends Shape
{
    /**
     * @param array{StorageCapacity: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
