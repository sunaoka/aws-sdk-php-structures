<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WhenIdle'|'WhenAllIdle'|'DrainFirst'|null $PatchingStrategy
 * @property ClusterPatchScheduleDetails|null $CurrentPatchSchedule
 * @property ClusterPatchScheduleDetails|null $DesiredPatchSchedule
 * @property DeploymentConfiguration|null $DeploymentConfig
 * @property int<3600, 2160000>|null $IdleWaitWindowInSeconds
 * @property ClusterDrainPolicy|null $DrainPolicy
 */
class ClusterAutoPatchConfigDetails extends Shape
{
    /**
     * @param array{
     *     PatchingStrategy?: 'WhenIdle'|'WhenAllIdle'|'DrainFirst'|null,
     *     CurrentPatchSchedule?: ClusterPatchScheduleDetails|null,
     *     DesiredPatchSchedule?: ClusterPatchScheduleDetails|null,
     *     DeploymentConfig?: DeploymentConfiguration|null,
     *     IdleWaitWindowInSeconds?: int<3600, 2160000>|null,
     *     DrainPolicy?: ClusterDrainPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
