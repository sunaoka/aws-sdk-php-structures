<?php

namespace Sunaoka\Aws\Structures\Proton\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string|null $componentName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $environmentName
 * @property string $id
 * @property string|null $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string|null $lastSucceededDeploymentId
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult $targetResourceCreatedAt
 * @property 'ENVIRONMENT'|'SERVICE_PIPELINE'|'SERVICE_INSTANCE'|'COMPONENT' $targetResourceType
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     componentName?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     environmentName: string,
     *     id: string,
     *     lastAttemptedDeploymentId?: string|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string|null,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null,
     *     targetArn: string,
     *     targetResourceCreatedAt: \Aws\Api\DateTimeResult,
     *     targetResourceType: 'ENVIRONMENT'|'SERVICE_PIPELINE'|'SERVICE_INSTANCE'|'COMPONENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
