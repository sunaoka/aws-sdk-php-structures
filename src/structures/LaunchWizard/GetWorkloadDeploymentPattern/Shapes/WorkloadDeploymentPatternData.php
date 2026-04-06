<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentPatternName
 * @property string|null $description
 * @property string|null $displayName
 * @property list<DeploymentSpecificationsField>|null $specifications
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null $status
 * @property string|null $statusMessage
 * @property string|null $workloadName
 * @property string|null $workloadVersionName
 */
class WorkloadDeploymentPatternData extends Shape
{
    /**
     * @param array{
     *     deploymentPatternName?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     specifications?: list<DeploymentSpecificationsField>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null,
     *     statusMessage?: string|null,
     *     workloadName?: string|null,
     *     workloadVersionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
