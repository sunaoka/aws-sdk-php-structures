<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerComputeConfiguration|null $worker
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{worker?: WorkerComputeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
