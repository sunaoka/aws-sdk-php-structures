<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessKeyDetails $AccessKeyDetails
 * @property list<S3BucketDetail> $S3BucketDetails
 * @property InstanceDetails $InstanceDetails
 * @property EksClusterDetails $EksClusterDetails
 * @property KubernetesDetails $KubernetesDetails
 * @property string $ResourceType
 * @property EbsVolumeDetails $EbsVolumeDetails
 * @property EcsClusterDetails $EcsClusterDetails
 * @property Container $ContainerDetails
 * @property RdsDbInstanceDetails $RdsDbInstanceDetails
 * @property RdsLimitlessDbDetails $RdsLimitlessDbDetails
 * @property RdsDbUserDetails $RdsDbUserDetails
 * @property LambdaDetails $LambdaDetails
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     AccessKeyDetails?: AccessKeyDetails,
     *     S3BucketDetails?: list<S3BucketDetail>,
     *     InstanceDetails?: InstanceDetails,
     *     EksClusterDetails?: EksClusterDetails,
     *     KubernetesDetails?: KubernetesDetails,
     *     ResourceType?: string,
     *     EbsVolumeDetails?: EbsVolumeDetails,
     *     EcsClusterDetails?: EcsClusterDetails,
     *     ContainerDetails?: Container,
     *     RdsDbInstanceDetails?: RdsDbInstanceDetails,
     *     RdsLimitlessDbDetails?: RdsLimitlessDbDetails,
     *     RdsDbUserDetails?: RdsDbUserDetails,
     *     LambdaDetails?: LambdaDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
