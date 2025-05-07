<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property CanaryRunStatus|null $Status
 * @property CanaryRunTimeline|null $Timeline
 * @property string|null $ArtifactS3Location
 * @property CanaryDryRunConfigOutput|null $DryRunConfig
 */
class CanaryRun extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: CanaryRunStatus|null,
     *     Timeline?: CanaryRunTimeline|null,
     *     ArtifactS3Location?: string|null,
     *     DryRunConfig?: CanaryDryRunConfigOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
