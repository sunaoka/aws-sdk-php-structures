<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeoutInSeconds
 * @property int $maxConcurrency
 */
class BatchPolicy extends Shape
{
    /**
     * @param array{
     *     timeoutInSeconds?: int,
     *     maxConcurrency?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
