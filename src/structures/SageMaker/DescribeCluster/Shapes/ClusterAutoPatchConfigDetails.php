<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WhenIdle'|'WhenAllIdle'|null $PatchingStrategy
 * @property ClusterPatchScheduleDetails|null $CurrentPatchSchedule
 * @property ClusterPatchScheduleDetails|null $DesiredPatchSchedule
 * @property DeploymentConfiguration|null $DeploymentConfig
 */
class ClusterAutoPatchConfigDetails extends Shape
{
    /**
     * @param array{
     *     PatchingStrategy?: 'WhenIdle'|'WhenAllIdle'|null,
     *     CurrentPatchSchedule?: ClusterPatchScheduleDetails|null,
     *     DesiredPatchSchedule?: ClusterPatchScheduleDetails|null,
     *     DeploymentConfig?: DeploymentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
