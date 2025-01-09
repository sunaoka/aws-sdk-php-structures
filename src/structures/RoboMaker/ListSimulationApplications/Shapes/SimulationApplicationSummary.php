<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $version
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property RobotSoftwareSuite $robotSoftwareSuite
 * @property SimulationSoftwareSuite $simulationSoftwareSuite
 */
class SimulationApplicationSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     version?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     robotSoftwareSuite?: RobotSoftwareSuite,
     *     simulationSoftwareSuite?: SimulationSoftwareSuite
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
