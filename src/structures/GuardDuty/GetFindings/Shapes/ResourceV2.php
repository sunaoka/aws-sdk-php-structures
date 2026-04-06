<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property string|null $Name
 * @property string|null $AccountId
 * @property 'EC2_INSTANCE'|'EC2_NETWORK_INTERFACE'|'S3_BUCKET'|'S3_OBJECT'|'ACCESS_KEY'|'EKS_CLUSTER'|'KUBERNETES_WORKLOAD'|'CONTAINER'|'ECS_CLUSTER'|'ECS_TASK'|'AUTOSCALING_AUTO_SCALING_GROUP'|'IAM_INSTANCE_PROFILE'|'CLOUDFORMATION_STACK'|'EC2_LAUNCH_TEMPLATE'|'EC2_VPC'|'EC2_IMAGE' $ResourceType
 * @property string|null $Region
 * @property string|null $Service
 * @property string|null $CloudPartition
 * @property list<Tag>|null $Tags
 * @property ResourceData|null $Data
 */
class ResourceV2 extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Name?: string|null,
     *     AccountId?: string|null,
     *     ResourceType: 'EC2_INSTANCE'|'EC2_NETWORK_INTERFACE'|'S3_BUCKET'|'S3_OBJECT'|'ACCESS_KEY'|'EKS_CLUSTER'|'KUBERNETES_WORKLOAD'|'CONTAINER'|'ECS_CLUSTER'|'ECS_TASK'|'AUTOSCALING_AUTO_SCALING_GROUP'|'IAM_INSTANCE_PROFILE'|'CLOUDFORMATION_STACK'|'EC2_LAUNCH_TEMPLATE'|'EC2_VPC'|'EC2_IMAGE',
     *     Region?: string|null,
     *     Service?: string|null,
     *     CloudPartition?: string|null,
     *     Tags?: list<Tag>|null,
     *     Data?: ResourceData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
