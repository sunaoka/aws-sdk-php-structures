<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property RobotSoftwareSuite|null $robotSoftwareSuite
 * @property SimulationSoftwareSuite|null $simulationSoftwareSuite
 */
class SimulationApplicationSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     version?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     robotSoftwareSuite?: RobotSoftwareSuite|null,
     *     simulationSoftwareSuite?: SimulationSoftwareSuite|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
