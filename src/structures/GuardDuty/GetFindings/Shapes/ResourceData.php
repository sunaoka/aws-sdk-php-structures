<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket|null $S3Bucket
 * @property Ec2Instance|null $Ec2Instance
 * @property AccessKey|null $AccessKey
 * @property Ec2NetworkInterface|null $Ec2NetworkInterface
 * @property S3Object|null $S3Object
 * @property EksCluster|null $EksCluster
 * @property KubernetesWorkload|null $KubernetesWorkload
 * @property ContainerFindingResource|null $Container
 * @property EcsCluster|null $EcsCluster
 * @property EcsTask|null $EcsTask
 * @property IamInstanceProfileV2|null $IamInstanceProfile
 * @property AutoscalingAutoScalingGroup|null $AutoscalingAutoScalingGroup
 * @property Ec2LaunchTemplate|null $Ec2LaunchTemplate
 * @property Ec2Vpc|null $Ec2Vpc
 * @property Ec2Image|null $Ec2Image
 * @property CloudformationStack|null $CloudformationStack
 */
class ResourceData extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: S3Bucket|null,
     *     Ec2Instance?: Ec2Instance|null,
     *     AccessKey?: AccessKey|null,
     *     Ec2NetworkInterface?: Ec2NetworkInterface|null,
     *     S3Object?: S3Object|null,
     *     EksCluster?: EksCluster|null,
     *     KubernetesWorkload?: KubernetesWorkload|null,
     *     Container?: ContainerFindingResource|null,
     *     EcsCluster?: EcsCluster|null,
     *     EcsTask?: EcsTask|null,
     *     IamInstanceProfile?: IamInstanceProfileV2|null,
     *     AutoscalingAutoScalingGroup?: AutoscalingAutoScalingGroup|null,
     *     Ec2LaunchTemplate?: Ec2LaunchTemplate|null,
     *     Ec2Vpc?: Ec2Vpc|null,
     *     Ec2Image?: Ec2Image|null,
     *     CloudformationStack?: CloudformationStack|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
