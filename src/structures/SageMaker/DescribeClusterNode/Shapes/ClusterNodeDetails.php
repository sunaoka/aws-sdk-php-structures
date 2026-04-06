<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceGroupName
 * @property string|null $InstanceId
 * @property ClusterInstanceStatusDetails|null $InstanceStatus
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|null $InstanceType
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property ClusterLifeCycleConfig|null $LifeCycleConfig
 * @property int<1, 2>|null $ThreadsPerCore
 * @property list<ClusterInstanceStorageConfig>|null $InstanceStorageConfigs
 * @property string|null $PrivatePrimaryIp
 * @property string|null $PrivateDnsHostname
 * @property ClusterInstancePlacement|null $Placement
 */
class ClusterNodeDetails extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName?: string|null,
     *     InstanceId?: string|null,
     *     InstanceStatus?: ClusterInstanceStatusDetails|null,
     *     InstanceType?: 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|null,
     *     LaunchTime?: \Aws\Api\DateTimeResult|null,
     *     LifeCycleConfig?: ClusterLifeCycleConfig|null,
     *     ThreadsPerCore?: int<1, 2>|null,
     *     InstanceStorageConfigs?: list<ClusterInstanceStorageConfig>|null,
     *     PrivatePrimaryIp?: string|null,
     *     PrivateDnsHostname?: string|null,
     *     Placement?: ClusterInstancePlacement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
