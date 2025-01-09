<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceUpdateNameToApply
 */
class ServiceUpdateRequest extends Shape
{
    /**
     * @param array{ServiceUpdateNameToApply?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
