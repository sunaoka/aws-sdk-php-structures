<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeEnvironmentName
 * @property string $computeEnvironmentArn
 * @property int|null $unmanagedvCpus
 * @property string|null $ecsClusterArn
 * @property array<string, string>|null $tags
 * @property 'MANAGED'|'UNMANAGED'|null $type
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null $status
 * @property string|null $statusReason
 * @property ComputeResource|null $computeResources
 * @property string|null $serviceRole
 * @property UpdatePolicy|null $updatePolicy
 * @property EksConfiguration|null $eksConfiguration
 * @property 'ECS'|'EKS'|null $containerOrchestrationType
 * @property string|null $uuid
 * @property string|null $context
 */
class ComputeEnvironmentDetail extends Shape
{
    /**
     * @param array{
     *     computeEnvironmentName: string,
     *     computeEnvironmentArn: string,
     *     unmanagedvCpus?: int|null,
     *     ecsClusterArn?: string|null,
     *     tags?: array<string, string>|null,
     *     type?: 'MANAGED'|'UNMANAGED'|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null,
     *     statusReason?: string|null,
     *     computeResources?: ComputeResource|null,
     *     serviceRole?: string|null,
     *     updatePolicy?: UpdatePolicy|null,
     *     eksConfiguration?: EksConfiguration|null,
     *     containerOrchestrationType?: 'ECS'|'EKS'|null,
     *     uuid?: string|null,
     *     context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
