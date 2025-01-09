<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentPatternName
 * @property string $description
 * @property string $displayName
 * @property list<DeploymentSpecificationsField> $specifications
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED' $status
 * @property string $statusMessage
 * @property string $workloadName
 * @property string $workloadVersionName
 */
class WorkloadDeploymentPatternData extends Shape
{
    /**
     * @param array{
     *     deploymentPatternName?: string,
     *     description?: string,
     *     displayName?: string,
     *     specifications?: list<DeploymentSpecificationsField>,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED',
     *     statusMessage?: string,
     *     workloadName?: string,
     *     workloadVersionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
