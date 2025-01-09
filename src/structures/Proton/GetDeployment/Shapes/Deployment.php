<?php

namespace Sunaoka\Aws\Structures\Proton\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property string $componentName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $deploymentStatusMessage
 * @property string $environmentName
 * @property string $id
 * @property DeploymentState $initialState
 * @property string $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $lastSucceededDeploymentId
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult $targetResourceCreatedAt
 * @property 'ENVIRONMENT'|'SERVICE_PIPELINE'|'SERVICE_INSTANCE'|'COMPONENT' $targetResourceType
 * @property DeploymentState $targetState
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     completedAt?: \Aws\Api\DateTimeResult,
     *     componentName?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string,
     *     environmentName: string,
     *     id: string,
     *     initialState?: DeploymentState,
     *     lastAttemptedDeploymentId?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string,
     *     targetArn: string,
     *     targetResourceCreatedAt: \Aws\Api\DateTimeResult,
     *     targetResourceType: 'ENVIRONMENT'|'SERVICE_PIPELINE'|'SERVICE_INSTANCE'|'COMPONENT',
     *     targetState?: DeploymentState
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
