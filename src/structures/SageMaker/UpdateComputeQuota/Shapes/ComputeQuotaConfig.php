<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ComputeQuotaResourceConfig> $ComputeQuotaResources
 * @property ResourceSharingConfig $ResourceSharingConfig
 * @property 'Never'|'LowerPriority' $PreemptTeamTasks
 */
class ComputeQuotaConfig extends Shape
{
    /**
     * @param array{
     *     ComputeQuotaResources?: list<ComputeQuotaResourceConfig>,
     *     ResourceSharingConfig?: ResourceSharingConfig,
     *     PreemptTeamTasks?: 'Never'|'LowerPriority'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
