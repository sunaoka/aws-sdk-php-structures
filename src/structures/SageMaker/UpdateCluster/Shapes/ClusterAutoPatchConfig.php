<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WhenIdle'|'WhenAllIdle' $PatchingStrategy
 * @property ClusterPatchSchedule|null $PatchSchedule
 * @property DeploymentConfiguration|null $DeploymentConfig
 */
class ClusterAutoPatchConfig extends Shape
{
    /**
     * @param array{
     *     PatchingStrategy: 'WhenIdle'|'WhenAllIdle',
     *     PatchSchedule?: ClusterPatchSchedule|null,
     *     DeploymentConfig?: DeploymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
