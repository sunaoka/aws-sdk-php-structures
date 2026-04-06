<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CurrentCount
 * @property int<1, max>|null $TargetCount
 * @property string|null $InstanceGroupName
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|null $InstanceType
 * @property ClusterLifeCycleConfig|null $LifeCycleConfig
 * @property string|null $ExecutionRole
 * @property int<1, 2>|null $ThreadsPerCore
 * @property list<ClusterInstanceStorageConfig>|null $InstanceStorageConfigs
 */
class ClusterInstanceGroupDetails extends Shape
{
    /**
     * @param array{
     *     CurrentCount?: int<0, max>|null,
     *     TargetCount?: int<1, max>|null,
     *     InstanceGroupName?: string|null,
     *     InstanceType?: 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|null,
     *     LifeCycleConfig?: ClusterLifeCycleConfig|null,
     *     ExecutionRole?: string|null,
     *     ThreadsPerCore?: int<1, 2>|null,
     *     InstanceStorageConfigs?: list<ClusterInstanceStorageConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
