<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property CanaryRunStatus $Status
 * @property CanaryRunTimeline $Timeline
 * @property string $ArtifactS3Location
 */
class CanaryRun extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Status?: CanaryRunStatus,
     *     Timeline?: CanaryRunTimeline,
     *     ArtifactS3Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
