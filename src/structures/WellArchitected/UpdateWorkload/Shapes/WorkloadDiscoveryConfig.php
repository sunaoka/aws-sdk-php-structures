<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $TrustedAdvisorIntegrationStatus
 * @property list<'WORKLOAD_METADATA'|'APP_REGISTRY'>|null $WorkloadResourceDefinition
 */
class WorkloadDiscoveryConfig extends Shape
{
    /**
     * @param array{
     *     TrustedAdvisorIntegrationStatus?: 'ENABLED'|'DISABLED'|null,
     *     WorkloadResourceDefinition?: list<'WORKLOAD_METADATA'|'APP_REGISTRY'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
