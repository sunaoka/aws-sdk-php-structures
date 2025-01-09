<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $TrustedAdvisorIntegrationStatus
 * @property list<'WORKLOAD_METADATA'|'APP_REGISTRY'> $WorkloadResourceDefinition
 */
class WorkloadDiscoveryConfig extends Shape
{
    /**
     * @param array{
     *     TrustedAdvisorIntegrationStatus?: 'ENABLED'|'DISABLED',
     *     WorkloadResourceDefinition?: list<'WORKLOAD_METADATA'|'APP_REGISTRY'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
