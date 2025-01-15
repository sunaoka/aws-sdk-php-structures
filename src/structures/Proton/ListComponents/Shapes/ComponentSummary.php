<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string|null $deploymentStatusMessage
 * @property string $environmentName
 * @property string|null $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentSucceededAt
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string|null $lastSucceededDeploymentId
 * @property string $name
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string|null,
     *     environmentName: string,
     *     lastAttemptedDeploymentId?: string|null,
     *     lastDeploymentAttemptedAt?: \Aws\Api\DateTimeResult|null,
     *     lastDeploymentSucceededAt?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string|null,
     *     name: string,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
