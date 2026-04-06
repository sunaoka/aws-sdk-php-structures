<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $InstanceCount
 * @property string $InstanceGroupName
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge' $InstanceType
 * @property ClusterLifeCycleConfig $LifeCycleConfig
 * @property string $ExecutionRole
 * @property int<1, 2>|null $ThreadsPerCore
 * @property list<ClusterInstanceStorageConfig>|null $InstanceStorageConfigs
 */
class ClusterInstanceGroupSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceCount: int<1, max>,
     *     InstanceGroupName: string,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge',
     *     LifeCycleConfig: ClusterLifeCycleConfig,
     *     ExecutionRole: string,
     *     ThreadsPerCore?: int<1, 2>|null,
     *     InstanceStorageConfigs?: list<ClusterInstanceStorageConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
