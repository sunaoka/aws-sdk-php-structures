<?php

namespace Sunaoka\Aws\Structures\MemoryDB\FailoverShard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceUpdateName
 * @property 'available'|'in-progress'|'complete'|'scheduled' $Status
 */
class PendingModifiedServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ServiceUpdateName?: string,
     *     Status?: 'available'|'in-progress'|'complete'|'scheduled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
