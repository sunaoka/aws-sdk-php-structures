<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WhenIdle'|'WhenAllIdle'|'DrainFirst' $PatchingStrategy
 * @property ClusterPatchSchedule|null $PatchSchedule
 * @property DeploymentConfiguration|null $DeploymentConfig
 * @property int<3600, 2160000>|null $IdleWaitWindowInSeconds
 * @property ClusterDrainPolicy|null $DrainPolicy
 */
class ClusterAutoPatchConfig extends Shape
{
    /**
     * @param array{
     *     PatchingStrategy: 'WhenIdle'|'WhenAllIdle'|'DrainFirst',
     *     PatchSchedule?: ClusterPatchSchedule|null,
     *     DeploymentConfig?: DeploymentConfiguration|null,
     *     IdleWaitWindowInSeconds?: int<3600, 2160000>|null,
     *     DrainPolicy?: ClusterDrainPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
