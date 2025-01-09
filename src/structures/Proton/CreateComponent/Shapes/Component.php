<?php

namespace Sunaoka\Aws\Structures\Proton\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string $deploymentStatusMessage
 * @property string $description
 * @property string $environmentName
 * @property string $lastAttemptedDeploymentId
 * @property string $lastClientRequestToken
 * @property \Aws\Api\DateTimeResult $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult $lastDeploymentSucceededAt
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $lastSucceededDeploymentId
 * @property string $name
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $serviceSpec
 */
class Component extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string,
     *     description?: string,
     *     environmentName: string,
     *     lastAttemptedDeploymentId?: string,
     *     lastClientRequestToken?: string,
     *     lastDeploymentAttemptedAt?: \Aws\Api\DateTimeResult,
     *     lastDeploymentSucceededAt?: \Aws\Api\DateTimeResult,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string,
     *     name: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string,
     *     serviceSpec?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
