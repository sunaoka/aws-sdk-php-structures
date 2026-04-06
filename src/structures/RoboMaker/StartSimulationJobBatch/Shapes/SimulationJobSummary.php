<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled'|null $status
 * @property list<string>|null $simulationApplicationNames
 * @property list<string>|null $robotApplicationNames
 * @property list<string>|null $dataSourceNames
 * @property 'CPU'|'GPU_AND_CPU'|null $computeType
 */
class SimulationJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     status?: 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled'|null,
     *     simulationApplicationNames?: list<string>|null,
     *     robotApplicationNames?: list<string>|null,
     *     dataSourceNames?: list<string>|null,
     *     computeType?: 'CPU'|'GPU_AND_CPU'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
