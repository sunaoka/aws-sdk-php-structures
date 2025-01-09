<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeEnvironmentName
 * @property string $computeEnvironmentArn
 * @property int $unmanagedvCpus
 * @property string $ecsClusterArn
 * @property array<string, string> $tags
 * @property 'MANAGED'|'UNMANAGED' $type
 * @property 'ENABLED'|'DISABLED' $state
 * @property 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID' $status
 * @property string $statusReason
 * @property ComputeResource $computeResources
 * @property string $serviceRole
 * @property UpdatePolicy $updatePolicy
 * @property EksConfiguration $eksConfiguration
 * @property 'ECS'|'EKS' $containerOrchestrationType
 * @property string $uuid
 * @property string $context
 */
class ComputeEnvironmentDetail extends Shape
{
    /**
     * @param array{
     *     computeEnvironmentName: string,
     *     computeEnvironmentArn: string,
     *     unmanagedvCpus?: int,
     *     ecsClusterArn?: string,
     *     tags?: array<string, string>,
     *     type?: 'MANAGED'|'UNMANAGED',
     *     state?: 'ENABLED'|'DISABLED',
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID',
     *     statusReason?: string,
     *     computeResources?: ComputeResource,
     *     serviceRole?: string,
     *     updatePolicy?: UpdatePolicy,
     *     eksConfiguration?: EksConfiguration,
     *     containerOrchestrationType?: 'ECS'|'EKS',
     *     uuid?: string,
     *     context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
