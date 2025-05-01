<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CurrentCount
 * @property int<0, 6758>|null $TargetCount
 * @property string|null $InstanceGroupName
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.16xlarge'|'ml.g6.12xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.gr6.4xlarge'|'ml.gr6.8xlarge'|'ml.g6e.xlarge'|'ml.g6e.2xlarge'|'ml.g6e.4xlarge'|'ml.g6e.8xlarge'|'ml.g6e.16xlarge'|'ml.g6e.12xlarge'|'ml.g6e.24xlarge'|'ml.g6e.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge'|'ml.c6i.large'|'ml.c6i.xlarge'|'ml.c6i.2xlarge'|'ml.c6i.4xlarge'|'ml.c6i.8xlarge'|'ml.c6i.12xlarge'|'ml.c6i.16xlarge'|'ml.c6i.24xlarge'|'ml.c6i.32xlarge'|'ml.m6i.large'|'ml.m6i.xlarge'|'ml.m6i.2xlarge'|'ml.m6i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.12xlarge'|'ml.m6i.16xlarge'|'ml.m6i.24xlarge'|'ml.m6i.32xlarge'|'ml.r6i.large'|'ml.r6i.xlarge'|'ml.r6i.2xlarge'|'ml.r6i.4xlarge'|'ml.r6i.8xlarge'|'ml.r6i.12xlarge'|'ml.r6i.16xlarge'|'ml.r6i.24xlarge'|'ml.r6i.32xlarge'|'ml.i3en.large'|'ml.i3en.xlarge'|'ml.i3en.2xlarge'|'ml.i3en.3xlarge'|'ml.i3en.6xlarge'|'ml.i3en.12xlarge'|'ml.i3en.24xlarge'|'ml.m7i.large'|'ml.m7i.xlarge'|'ml.m7i.2xlarge'|'ml.m7i.4xlarge'|'ml.m7i.8xlarge'|'ml.m7i.12xlarge'|'ml.m7i.16xlarge'|'ml.m7i.24xlarge'|'ml.m7i.48xlarge'|'ml.r7i.large'|'ml.r7i.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.4xlarge'|'ml.r7i.8xlarge'|'ml.r7i.12xlarge'|'ml.r7i.16xlarge'|'ml.r7i.24xlarge'|'ml.r7i.48xlarge'|null $InstanceType
 * @property ClusterLifeCycleConfig|null $LifeCycleConfig
 * @property string|null $ExecutionRole
 * @property int<1, 2>|null $ThreadsPerCore
 * @property list<ClusterInstanceStorageConfig>|null $InstanceStorageConfigs
 * @property list<'InstanceStress'|'InstanceConnectivity'>|null $OnStartDeepHealthChecks
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Degraded'|'SystemUpdating'|'Deleting'|null $Status
 * @property string|null $TrainingPlanArn
 * @property string|null $TrainingPlanStatus
 * @property VpcConfig|null $OverrideVpcConfig
 * @property ScheduledUpdateConfig|null $ScheduledUpdateConfig
 */
class ClusterInstanceGroupDetails extends Shape
{
    /**
     * @param array{
     *     CurrentCount?: int<0, max>|null,
     *     TargetCount?: int<0, 6758>|null,
     *     InstanceGroupName?: string|null,
     *     InstanceType?: 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.c5.large'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.12xlarge'|'ml.c5.18xlarge'|'ml.c5.24xlarge'|'ml.c5n.large'|'ml.c5n.2xlarge'|'ml.c5n.4xlarge'|'ml.c5n.9xlarge'|'ml.c5n.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.8xlarge'|'ml.m5.12xlarge'|'ml.m5.16xlarge'|'ml.m5.24xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.16xlarge'|'ml.g6.12xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.gr6.4xlarge'|'ml.gr6.8xlarge'|'ml.g6e.xlarge'|'ml.g6e.2xlarge'|'ml.g6e.4xlarge'|'ml.g6e.8xlarge'|'ml.g6e.16xlarge'|'ml.g6e.12xlarge'|'ml.g6e.24xlarge'|'ml.g6e.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge'|'ml.c6i.large'|'ml.c6i.xlarge'|'ml.c6i.2xlarge'|'ml.c6i.4xlarge'|'ml.c6i.8xlarge'|'ml.c6i.12xlarge'|'ml.c6i.16xlarge'|'ml.c6i.24xlarge'|'ml.c6i.32xlarge'|'ml.m6i.large'|'ml.m6i.xlarge'|'ml.m6i.2xlarge'|'ml.m6i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.12xlarge'|'ml.m6i.16xlarge'|'ml.m6i.24xlarge'|'ml.m6i.32xlarge'|'ml.r6i.large'|'ml.r6i.xlarge'|'ml.r6i.2xlarge'|'ml.r6i.4xlarge'|'ml.r6i.8xlarge'|'ml.r6i.12xlarge'|'ml.r6i.16xlarge'|'ml.r6i.24xlarge'|'ml.r6i.32xlarge'|'ml.i3en.large'|'ml.i3en.xlarge'|'ml.i3en.2xlarge'|'ml.i3en.3xlarge'|'ml.i3en.6xlarge'|'ml.i3en.12xlarge'|'ml.i3en.24xlarge'|'ml.m7i.large'|'ml.m7i.xlarge'|'ml.m7i.2xlarge'|'ml.m7i.4xlarge'|'ml.m7i.8xlarge'|'ml.m7i.12xlarge'|'ml.m7i.16xlarge'|'ml.m7i.24xlarge'|'ml.m7i.48xlarge'|'ml.r7i.large'|'ml.r7i.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.4xlarge'|'ml.r7i.8xlarge'|'ml.r7i.12xlarge'|'ml.r7i.16xlarge'|'ml.r7i.24xlarge'|'ml.r7i.48xlarge'|null,
     *     LifeCycleConfig?: ClusterLifeCycleConfig|null,
     *     ExecutionRole?: string|null,
     *     ThreadsPerCore?: int<1, 2>|null,
     *     InstanceStorageConfigs?: list<ClusterInstanceStorageConfig>|null,
     *     OnStartDeepHealthChecks?: list<'InstanceStress'|'InstanceConnectivity'>|null,
     *     Status?: 'InService'|'Creating'|'Updating'|'Failed'|'Degraded'|'SystemUpdating'|'Deleting'|null,
     *     TrainingPlanArn?: string|null,
     *     TrainingPlanStatus?: string|null,
     *     OverrideVpcConfig?: VpcConfig|null,
     *     ScheduledUpdateConfig?: ScheduledUpdateConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
