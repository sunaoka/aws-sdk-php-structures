<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Operation>|null $Operations
 * @property string|null $NextMarker
 */
class CheckpointUpdatedExecutionState extends Shape
{
    /**
     * @param array{
     *     Operations?: list<Operation>|null,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
