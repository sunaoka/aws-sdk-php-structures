<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<EnvironmentError>>|null $environmentFailureReasons
 * @property 'PENDING_DEPLOYMENT'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED_VALIDATION'|'FAILED_DEPLOYMENT'|null $overallDeploymentStatus
 */
class EnvironmentDeploymentDetails extends Shape
{
    /**
     * @param array{
     *     environmentFailureReasons?: array<string, list<EnvironmentError>>|null,
     *     overallDeploymentStatus?: 'PENDING_DEPLOYMENT'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED_VALIDATION'|'FAILED_DEPLOYMENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
