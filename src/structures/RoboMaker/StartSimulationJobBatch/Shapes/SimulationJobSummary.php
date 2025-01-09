<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled' $status
 * @property list<string> $simulationApplicationNames
 * @property list<string> $robotApplicationNames
 * @property list<string> $dataSourceNames
 * @property 'CPU'|'GPU_AND_CPU' $computeType
 */
class SimulationJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     status?: 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled',
     *     simulationApplicationNames?: list<string>,
     *     robotApplicationNames?: list<string>,
     *     dataSourceNames?: list<string>,
     *     computeType?: 'CPU'|'GPU_AND_CPU'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
