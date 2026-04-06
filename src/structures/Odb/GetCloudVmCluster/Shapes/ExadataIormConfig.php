<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DbIormConfig>|null $dbPlans
 * @property string|null $lifecycleDetails
 * @property 'BOOTSTRAPPING'|'DISABLED'|'ENABLED'|'FAILED'|'UPDATING'|null $lifecycleState
 * @property 'AUTO'|'BALANCED'|'BASIC'|'HIGH_THROUGHPUT'|'LOW_LATENCY'|null $objective
 */
class ExadataIormConfig extends Shape
{
    /**
     * @param array{
     *     dbPlans?: list<DbIormConfig>|null,
     *     lifecycleDetails?: string|null,
     *     lifecycleState?: 'BOOTSTRAPPING'|'DISABLED'|'ENABLED'|'FAILED'|'UPDATING'|null,
     *     objective?: 'AUTO'|'BALANCED'|'BASIC'|'HIGH_THROUGHPUT'|'LOW_LATENCY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
