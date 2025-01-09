<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerComputeConfiguration $worker
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{worker?: WorkerComputeConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
