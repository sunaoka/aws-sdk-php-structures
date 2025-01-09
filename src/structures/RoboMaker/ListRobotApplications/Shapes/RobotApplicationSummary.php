<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobotApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $version
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property RobotSoftwareSuite $robotSoftwareSuite
 */
class RobotApplicationSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     version?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     robotSoftwareSuite?: RobotSoftwareSuite
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
