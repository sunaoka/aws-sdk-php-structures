<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloadDeploymentPatterns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentPatternName
 * @property string $description
 * @property string $displayName
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED' $status
 * @property string $statusMessage
 * @property string $workloadName
 * @property string $workloadVersionName
 */
class WorkloadDeploymentPatternDataSummary extends Shape
{
    /**
     * @param array{
     *     deploymentPatternName?: string,
     *     description?: string,
     *     displayName?: string,
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
