<?php

namespace Sunaoka\Aws\Structures\Proton\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property string $componentName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $environmentName
 * @property string $id
 * @property string $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $lastSucceededDeploymentId
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult $targetResourceCreatedAt
 * @property 'ENVIRONMENT'|'SERVICE_PIPELINE'|'SERVICE_INSTANCE'|'COMPONENT' $targetResourceType
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     completedAt?: \Aws\Api\DateTimeResult,
     *     componentName?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     environmentName: string,
     *     id: string,
     *     lastAttemptedDeploymentId?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string,
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
