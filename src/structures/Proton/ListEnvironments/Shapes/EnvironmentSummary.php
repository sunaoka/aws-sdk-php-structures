<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $componentRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $deploymentStatusMessage
 * @property string $description
 * @property string $environmentAccountConnectionId
 * @property string $environmentAccountId
 * @property string $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult $lastDeploymentSucceededAt
 * @property string $lastSucceededDeploymentId
 * @property string $name
 * @property string $protonServiceRoleArn
 * @property 'CUSTOMER_MANAGED' $provisioning
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     componentRoleArn?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string,
     *     description?: string,
     *     environmentAccountConnectionId?: string,
     *     environmentAccountId?: string,
     *     lastAttemptedDeploymentId?: string,
     *     lastDeploymentAttemptedAt: \Aws\Api\DateTimeResult,
     *     lastDeploymentSucceededAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string,
     *     name: string,
     *     protonServiceRoleArn?: string,
     *     provisioning?: 'CUSTOMER_MANAGED',
     *     templateMajorVersion: string,
     *     templateMinorVersion: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
