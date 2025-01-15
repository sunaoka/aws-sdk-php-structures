<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string|null $deploymentStatusMessage
 * @property string $environmentName
 * @property string|null $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult $lastDeploymentSucceededAt
 * @property string|null $lastSucceededDeploymentId
 * @property string $name
 * @property string $serviceName
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class ServiceInstanceSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string|null,
     *     environmentName: string,
     *     lastAttemptedDeploymentId?: string|null,
     *     lastDeploymentAttemptedAt: \Aws\Api\DateTimeResult,
     *     lastDeploymentSucceededAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string|null,
     *     name: string,
     *     serviceName: string,
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
