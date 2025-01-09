<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterIamRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string $NodeType
 * @property string $ClusterStatus
 * @property string $ClusterAvailabilityStatus
 * @property string $ModifyStatus
 * @property string $MasterUsername
 * @property string $DBName
 * @property Endpoint $Endpoint
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property int $ManualSnapshotRetentionPeriod
 * @property list<ClusterSecurityGroupMembership> $ClusterSecurityGroups
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property list<ClusterParameterGroupStatus> $ClusterParameterGroups
 * @property string $ClusterSubnetGroupName
 * @property string $VpcId
 * @property string $AvailabilityZone
 * @property string $PreferredMaintenanceWindow
 * @property PendingModifiedValues $PendingModifiedValues
 * @property string $ClusterVersion
 * @property bool $AllowVersionUpgrade
 * @property int $NumberOfNodes
 * @property bool $PubliclyAccessible
 * @property bool $Encrypted
 * @property RestoreStatus $RestoreStatus
 * @property DataTransferProgress $DataTransferProgress
 * @property HsmStatus $HsmStatus
 * @property ClusterSnapshotCopyStatus $ClusterSnapshotCopyStatus
 * @property string $ClusterPublicKey
 * @property list<ClusterNode> $ClusterNodes
 * @property ElasticIpStatus $ElasticIpStatus
 * @property string $ClusterRevisionNumber
 * @property list<Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnhancedVpcRouting
 * @property list<ClusterIamRole> $IamRoles
 * @property list<string> $PendingActions
 * @property string $MaintenanceTrackName
 * @property string $ElasticResizeNumberOfNodeOptions
 * @property list<DeferredMaintenanceWindow> $DeferredMaintenanceWindows
 * @property string $SnapshotScheduleIdentifier
 * @property 'MODIFYING'|'ACTIVE'|'FAILED' $SnapshotScheduleState
 * @property \Aws\Api\DateTimeResult $ExpectedNextSnapshotScheduleTime
 * @property string $ExpectedNextSnapshotScheduleTimeStatus
 * @property \Aws\Api\DateTimeResult $NextMaintenanceWindowStartTime
 * @property ResizeInfo $ResizeInfo
 * @property string $AvailabilityZoneRelocationStatus
 * @property string $ClusterNamespaceArn
 * @property int $TotalStorageCapacityInMegaBytes
 * @property AquaConfiguration $AquaConfiguration
 * @property string $DefaultIamRoleArn
 * @property ReservedNodeExchangeStatus $ReservedNodeExchangeStatus
 * @property string $CustomDomainName
 * @property string $CustomDomainCertificateArn
 * @property \Aws\Api\DateTimeResult $CustomDomainCertificateExpiryDate
 * @property string $MasterPasswordSecretArn
 * @property string $MasterPasswordSecretKmsKeyId
 * @property string $IpAddressType
 * @property string $MultiAZ
 * @property SecondaryClusterInfo $MultiAZSecondary
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     NodeType?: string,
     *     ClusterStatus?: string,
     *     ClusterAvailabilityStatus?: string,
     *     ModifyStatus?: string,
     *     MasterUsername?: string,
     *     DBName?: string,
     *     Endpoint?: Endpoint,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ManualSnapshotRetentionPeriod?: int,
     *     ClusterSecurityGroups?: list<ClusterSecurityGroupMembership>,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     ClusterParameterGroups?: list<ClusterParameterGroupStatus>,
     *     ClusterSubnetGroupName?: string,
     *     VpcId?: string,
     *     AvailabilityZone?: string,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: PendingModifiedValues,
     *     ClusterVersion?: string,
     *     AllowVersionUpgrade?: bool,
     *     NumberOfNodes?: int,
     *     PubliclyAccessible?: bool,
     *     Encrypted?: bool,
     *     RestoreStatus?: RestoreStatus,
     *     DataTransferProgress?: DataTransferProgress,
     *     HsmStatus?: HsmStatus,
     *     ClusterSnapshotCopyStatus?: ClusterSnapshotCopyStatus,
     *     ClusterPublicKey?: string,
     *     ClusterNodes?: list<ClusterNode>,
     *     ElasticIpStatus?: ElasticIpStatus,
     *     ClusterRevisionNumber?: string,
     *     Tags?: list<Tag>,
     *     KmsKeyId?: string,
     *     EnhancedVpcRouting?: bool,
     *     IamRoles?: list<ClusterIamRole>,
     *     PendingActions?: list<string>,
     *     MaintenanceTrackName?: string,
     *     ElasticResizeNumberOfNodeOptions?: string,
     *     DeferredMaintenanceWindows?: list<DeferredMaintenanceWindow>,
     *     SnapshotScheduleIdentifier?: string,
     *     SnapshotScheduleState?: 'MODIFYING'|'ACTIVE'|'FAILED',
     *     ExpectedNextSnapshotScheduleTime?: \Aws\Api\DateTimeResult,
     *     ExpectedNextSnapshotScheduleTimeStatus?: string,
     *     NextMaintenanceWindowStartTime?: \Aws\Api\DateTimeResult,
     *     ResizeInfo?: ResizeInfo,
     *     AvailabilityZoneRelocationStatus?: string,
     *     ClusterNamespaceArn?: string,
     *     TotalStorageCapacityInMegaBytes?: int,
     *     AquaConfiguration?: AquaConfiguration,
     *     DefaultIamRoleArn?: string,
     *     ReservedNodeExchangeStatus?: ReservedNodeExchangeStatus,
     *     CustomDomainName?: string,
     *     CustomDomainCertificateArn?: string,
     *     CustomDomainCertificateExpiryDate?: \Aws\Api\DateTimeResult,
     *     MasterPasswordSecretArn?: string,
     *     MasterPasswordSecretKmsKeyId?: string,
     *     IpAddressType?: string,
     *     MultiAZ?: string,
     *     MultiAZSecondary?: SecondaryClusterInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
