<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $workerCount
 * @property WorkerResourceConfig $workerConfiguration
 */
class InitialCapacityConfig extends Shape
{
    /**
     * @param array{
     *     workerCount: int,
     *     workerConfiguration?: WorkerResourceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
