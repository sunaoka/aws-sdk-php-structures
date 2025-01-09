<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Validating'|'DownloadingExtracting'|'ExecutingDownloadCondition'|'ExecutingPreLaunch'|'Launching'|'ExecutingPostLaunch'|'Finished' $currentProgress
 * @property float $percentDone
 * @property int $estimatedTimeRemainingSeconds
 * @property string $targetResource
 */
class ProgressDetail extends Shape
{
    /**
     * @param array{
     *     currentProgress?: 'Validating'|'DownloadingExtracting'|'ExecutingDownloadCondition'|'ExecutingPreLaunch'|'Launching'|'ExecutingPostLaunch'|'Finished',
     *     percentDone?: float,
     *     estimatedTimeRemainingSeconds?: int,
     *     targetResource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
