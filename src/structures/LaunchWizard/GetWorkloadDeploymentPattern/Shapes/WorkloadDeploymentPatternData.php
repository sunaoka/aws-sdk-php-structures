<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workloadName
 * @property string|null $deploymentPatternName
 * @property string|null $workloadVersionName
 * @property string|null $deploymentPatternVersionName
 * @property string|null $displayName
 * @property string|null $description
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null $status
 * @property string|null $statusMessage
 * @property list<DeploymentSpecificationsField>|null $specifications
 */
class WorkloadDeploymentPatternData extends Shape
{
    /**
     * @param array{
     *     workloadName?: string|null,
     *     deploymentPatternName?: string|null,
     *     workloadVersionName?: string|null,
     *     deploymentPatternVersionName?: string|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null,
     *     statusMessage?: string|null,
     *     specifications?: list<DeploymentSpecificationsField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
