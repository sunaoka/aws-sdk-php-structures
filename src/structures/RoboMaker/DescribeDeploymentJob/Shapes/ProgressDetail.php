<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Validating'|'DownloadingExtracting'|'ExecutingDownloadCondition'|'ExecutingPreLaunch'|'Launching'|'ExecutingPostLaunch'|'Finished'|null $currentProgress
 * @property float|null $percentDone
 * @property int|null $estimatedTimeRemainingSeconds
 * @property string|null $targetResource
 */
class ProgressDetail extends Shape
{
    /**
     * @param array{
     *     currentProgress?: 'Validating'|'DownloadingExtracting'|'ExecutingDownloadCondition'|'ExecutingPreLaunch'|'Launching'|'ExecutingPostLaunch'|'Finished'|null,
     *     percentDone?: float|null,
     *     estimatedTimeRemainingSeconds?: int|null,
     *     targetResource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
