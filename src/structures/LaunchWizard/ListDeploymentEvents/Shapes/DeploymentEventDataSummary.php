<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $name
 * @property 'CANCELED'|'CANCELING'|'COMPLETED'|'CREATED'|'FAILED'|'IN_PROGRESS'|'PENDING'|'TIMED_OUT' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class DeploymentEventDataSummary extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     name?: string,
     *     status?: 'CANCELED'|'CANCELING'|'COMPLETED'|'CREATED'|'FAILED'|'IN_PROGRESS'|'PENDING'|'TIMED_OUT',
     *     statusReason?: string,
     *     timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
