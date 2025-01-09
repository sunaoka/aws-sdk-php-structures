<?php

namespace Sunaoka\Aws\Structures\Proton\CancelServiceInstanceDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $deploymentStatusMessage
 * @property string $environmentName
 * @property string $lastAttemptedDeploymentId
 * @property string $lastClientRequestToken
 * @property \Aws\Api\DateTimeResult $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult $lastDeploymentSucceededAt
 * @property string $lastSucceededDeploymentId
 * @property string $name
 * @property string $serviceName
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class ServiceInstance extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string,
     *     environmentName: string,
     *     lastAttemptedDeploymentId?: string,
     *     lastClientRequestToken?: string,
     *     lastDeploymentAttemptedAt: \Aws\Api\DateTimeResult,
     *     lastDeploymentSucceededAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string,
     *     name: string,
     *     serviceName: string,
     *     spec?: string,
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
