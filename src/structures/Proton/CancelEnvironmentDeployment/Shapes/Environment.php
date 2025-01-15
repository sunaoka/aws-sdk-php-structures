<?php

namespace Sunaoka\Aws\Structures\Proton\CancelEnvironmentDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED' $deploymentStatus
 * @property string|null $deploymentStatusMessage
 * @property string|null $description
 * @property string|null $environmentAccountConnectionId
 * @property string|null $environmentAccountId
 * @property string|null $lastAttemptedDeploymentId
 * @property \Aws\Api\DateTimeResult $lastDeploymentAttemptedAt
 * @property \Aws\Api\DateTimeResult $lastDeploymentSucceededAt
 * @property string|null $lastSucceededDeploymentId
 * @property string $name
 * @property string|null $protonServiceRoleArn
 * @property 'CUSTOMER_MANAGED'|null $provisioning
 * @property RepositoryBranch|null $provisioningRepository
 * @property string|null $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deploymentStatus: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'CANCELLING'|'CANCELLED',
     *     deploymentStatusMessage?: string|null,
     *     description?: string|null,
     *     environmentAccountConnectionId?: string|null,
     *     environmentAccountId?: string|null,
     *     lastAttemptedDeploymentId?: string|null,
     *     lastDeploymentAttemptedAt: \Aws\Api\DateTimeResult,
     *     lastDeploymentSucceededAt: \Aws\Api\DateTimeResult,
     *     lastSucceededDeploymentId?: string|null,
     *     name: string,
     *     protonServiceRoleArn?: string|null,
     *     provisioning?: 'CUSTOMER_MANAGED'|null,
     *     provisioningRepository?: RepositoryBranch|null,
     *     spec?: string|null,
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
