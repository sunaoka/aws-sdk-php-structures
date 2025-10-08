<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobWorkerComputeConfiguration|null $worker
 */
class ProtectedJobComputeConfiguration extends Shape
{
    /**
     * @param array{worker?: ProtectedJobWorkerComputeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
