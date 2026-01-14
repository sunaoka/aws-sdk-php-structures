<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_DEPLOYMENT'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED_VALIDATION'|'FAILED_DEPLOYMENT'|null $overallDeploymentStatus
 * @property array<string, list<EnvironmentError>>|null $environmentFailureReasons
 */
class EnvironmentDeploymentDetails extends Shape
{
    /**
     * @param array{
     *     overallDeploymentStatus?: 'PENDING_DEPLOYMENT'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED_VALIDATION'|'FAILED_DEPLOYMENT'|null,
     *     environmentFailureReasons?: array<string, list<EnvironmentError>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
