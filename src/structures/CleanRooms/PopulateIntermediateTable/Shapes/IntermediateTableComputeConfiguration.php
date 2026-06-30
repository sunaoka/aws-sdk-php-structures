<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PopulateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerComputeConfiguration|null $queryComputeConfiguration
 */
class IntermediateTableComputeConfiguration extends Shape
{
    /**
     * @param array{queryComputeConfiguration?: WorkerComputeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
