<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceUpdateName
 * @property 'available'|'in-progress'|'complete'|'scheduled'|null $Status
 */
class PendingModifiedServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ServiceUpdateName?: string|null,
     *     Status?: 'available'|'in-progress'|'complete'|'scheduled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
