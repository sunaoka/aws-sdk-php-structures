<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ComputeQuotaResourceConfig>|null $ComputeQuotaResources
 * @property ResourceSharingConfig|null $ResourceSharingConfig
 * @property 'Never'|'LowerPriority'|null $PreemptTeamTasks
 */
class ComputeQuotaConfig extends Shape
{
    /**
     * @param array{
     *     ComputeQuotaResources?: list<ComputeQuotaResourceConfig>|null,
     *     ResourceSharingConfig?: ResourceSharingConfig|null,
     *     PreemptTeamTasks?: 'Never'|'LowerPriority'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
