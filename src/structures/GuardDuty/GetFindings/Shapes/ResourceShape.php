<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessKeyDetails|null $AccessKeyDetails
 * @property list<S3BucketDetail>|null $S3BucketDetails
 * @property InstanceDetails|null $InstanceDetails
 * @property EksClusterDetails|null $EksClusterDetails
 * @property KubernetesDetails|null $KubernetesDetails
 * @property string|null $ResourceType
 * @property EbsVolumeDetails|null $EbsVolumeDetails
 * @property EcsClusterDetails|null $EcsClusterDetails
 * @property Container|null $ContainerDetails
 * @property RdsDbInstanceDetails|null $RdsDbInstanceDetails
 * @property RdsLimitlessDbDetails|null $RdsLimitlessDbDetails
 * @property RdsDbUserDetails|null $RdsDbUserDetails
 * @property LambdaDetails|null $LambdaDetails
 * @property EbsSnapshotDetails|null $EbsSnapshotDetails
 * @property Ec2ImageDetails|null $Ec2ImageDetails
 * @property RecoveryPointDetails|null $RecoveryPointDetails
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     AccessKeyDetails?: AccessKeyDetails|null,
     *     S3BucketDetails?: list<S3BucketDetail>|null,
     *     InstanceDetails?: InstanceDetails|null,
     *     EksClusterDetails?: EksClusterDetails|null,
     *     KubernetesDetails?: KubernetesDetails|null,
     *     ResourceType?: string|null,
     *     EbsVolumeDetails?: EbsVolumeDetails|null,
     *     EcsClusterDetails?: EcsClusterDetails|null,
     *     ContainerDetails?: Container|null,
     *     RdsDbInstanceDetails?: RdsDbInstanceDetails|null,
     *     RdsLimitlessDbDetails?: RdsLimitlessDbDetails|null,
     *     RdsDbUserDetails?: RdsDbUserDetails|null,
     *     LambdaDetails?: LambdaDetails|null,
     *     EbsSnapshotDetails?: EbsSnapshotDetails|null,
     *     Ec2ImageDetails?: Ec2ImageDetails|null,
     *     RecoveryPointDetails?: RecoveryPointDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
