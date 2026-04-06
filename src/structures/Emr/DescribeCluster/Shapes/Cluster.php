<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property ClusterStatus|null $Status
 * @property Ec2InstanceAttributes|null $Ec2InstanceAttributes
 * @property 'INSTANCE_FLEET'|'INSTANCE_GROUP'|null $InstanceCollectionType
 * @property string|null $LogUri
 * @property string|null $LogEncryptionKmsKeyId
 * @property string|null $RequestedAmiVersion
 * @property string|null $RunningAmiVersion
 * @property string|null $ReleaseLabel
 * @property bool|null $AutoTerminate
 * @property bool|null $TerminationProtected
 * @property bool|null $UnhealthyNodeReplacement
 * @property bool|null $VisibleToAllUsers
 * @property list<Application>|null $Applications
 * @property list<Tag>|null $Tags
 * @property string|null $ServiceRole
 * @property int|null $NormalizedInstanceHours
 * @property string|null $MasterPublicDnsName
 * @property list<Configuration>|null $Configurations
 * @property string|null $SecurityConfiguration
 * @property string|null $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null $ScaleDownBehavior
 * @property string|null $CustomAmiId
 * @property int|null $EbsRootVolumeSize
 * @property 'SECURITY'|'NONE'|null $RepoUpgradeOnBoot
 * @property KerberosAttributes|null $KerberosAttributes
 * @property string|null $ClusterArn
 * @property string|null $OutpostArn
 * @property int|null $StepConcurrencyLevel
 * @property list<PlacementGroupConfig>|null $PlacementGroups
 * @property string|null $OSReleaseLabel
 * @property int|null $EbsRootVolumeIops
 * @property int|null $EbsRootVolumeThroughput
 * @property bool|null $ExtendedSupport
 * @property MonitoringConfiguration|null $MonitoringConfiguration
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: ClusterStatus|null,
     *     Ec2InstanceAttributes?: Ec2InstanceAttributes|null,
     *     InstanceCollectionType?: 'INSTANCE_FLEET'|'INSTANCE_GROUP'|null,
     *     LogUri?: string|null,
     *     LogEncryptionKmsKeyId?: string|null,
     *     RequestedAmiVersion?: string|null,
     *     RunningAmiVersion?: string|null,
     *     ReleaseLabel?: string|null,
     *     AutoTerminate?: bool|null,
     *     TerminationProtected?: bool|null,
     *     UnhealthyNodeReplacement?: bool|null,
     *     VisibleToAllUsers?: bool|null,
     *     Applications?: list<Application>|null,
     *     Tags?: list<Tag>|null,
     *     ServiceRole?: string|null,
     *     NormalizedInstanceHours?: int|null,
     *     MasterPublicDnsName?: string|null,
     *     Configurations?: list<Configuration>|null,
     *     SecurityConfiguration?: string|null,
     *     AutoScalingRole?: string|null,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null,
     *     CustomAmiId?: string|null,
     *     EbsRootVolumeSize?: int|null,
     *     RepoUpgradeOnBoot?: 'SECURITY'|'NONE'|null,
     *     KerberosAttributes?: KerberosAttributes|null,
     *     ClusterArn?: string|null,
     *     OutpostArn?: string|null,
     *     StepConcurrencyLevel?: int|null,
     *     PlacementGroups?: list<PlacementGroupConfig>|null,
     *     OSReleaseLabel?: string|null,
     *     EbsRootVolumeIops?: int|null,
     *     EbsRootVolumeThroughput?: int|null,
     *     ExtendedSupport?: bool|null,
     *     MonitoringConfiguration?: MonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
