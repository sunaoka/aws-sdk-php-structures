<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $name
 * @property 'CANCELED'|'CANCELING'|'COMPLETED'|'CREATED'|'FAILED'|'IN_PROGRESS'|'PENDING'|'TIMED_OUT'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $timestamp
 */
class DeploymentEventDataSummary extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     name?: string|null,
     *     status?: 'CANCELED'|'CANCELING'|'COMPLETED'|'CREATED'|'FAILED'|'IN_PROGRESS'|'PENDING'|'TIMED_OUT'|null,
     *     statusReason?: string|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
