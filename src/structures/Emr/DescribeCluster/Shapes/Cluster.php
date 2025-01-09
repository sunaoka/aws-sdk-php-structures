<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property ClusterStatus $Status
 * @property Ec2InstanceAttributes $Ec2InstanceAttributes
 * @property 'INSTANCE_FLEET'|'INSTANCE_GROUP' $InstanceCollectionType
 * @property string $LogUri
 * @property string $LogEncryptionKmsKeyId
 * @property string $RequestedAmiVersion
 * @property string $RunningAmiVersion
 * @property string $ReleaseLabel
 * @property bool $AutoTerminate
 * @property bool $TerminationProtected
 * @property bool $UnhealthyNodeReplacement
 * @property bool $VisibleToAllUsers
 * @property list<Application> $Applications
 * @property list<Tag> $Tags
 * @property string $ServiceRole
 * @property int $NormalizedInstanceHours
 * @property string $MasterPublicDnsName
 * @property list<Configuration> $Configurations
 * @property string $SecurityConfiguration
 * @property string $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION' $ScaleDownBehavior
 * @property string $CustomAmiId
 * @property int $EbsRootVolumeSize
 * @property 'SECURITY'|'NONE' $RepoUpgradeOnBoot
 * @property KerberosAttributes $KerberosAttributes
 * @property string $ClusterArn
 * @property string $OutpostArn
 * @property int $StepConcurrencyLevel
 * @property list<PlacementGroupConfig> $PlacementGroups
 * @property string $OSReleaseLabel
 * @property int $EbsRootVolumeIops
 * @property int $EbsRootVolumeThroughput
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Status?: ClusterStatus,
     *     Ec2InstanceAttributes?: Ec2InstanceAttributes,
     *     InstanceCollectionType?: 'INSTANCE_FLEET'|'INSTANCE_GROUP',
     *     LogUri?: string,
     *     LogEncryptionKmsKeyId?: string,
     *     RequestedAmiVersion?: string,
     *     RunningAmiVersion?: string,
     *     ReleaseLabel?: string,
     *     AutoTerminate?: bool,
     *     TerminationProtected?: bool,
     *     UnhealthyNodeReplacement?: bool,
     *     VisibleToAllUsers?: bool,
     *     Applications?: list<Application>,
     *     Tags?: list<Tag>,
     *     ServiceRole?: string,
     *     NormalizedInstanceHours?: int,
     *     MasterPublicDnsName?: string,
     *     Configurations?: list<Configuration>,
     *     SecurityConfiguration?: string,
     *     AutoScalingRole?: string,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION',
     *     CustomAmiId?: string,
     *     EbsRootVolumeSize?: int,
     *     RepoUpgradeOnBoot?: 'SECURITY'|'NONE',
     *     KerberosAttributes?: KerberosAttributes,
     *     ClusterArn?: string,
     *     OutpostArn?: string,
     *     StepConcurrencyLevel?: int,
     *     PlacementGroups?: list<PlacementGroupConfig>,
     *     OSReleaseLabel?: string,
     *     EbsRootVolumeIops?: int,
     *     EbsRootVolumeThroughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
