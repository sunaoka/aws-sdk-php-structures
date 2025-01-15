<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $timeoutInSeconds
 * @property int|null $maxConcurrency
 */
class BatchPolicy extends Shape
{
    /**
     * @param array{
     *     timeoutInSeconds?: int|null,
     *     maxConcurrency?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
