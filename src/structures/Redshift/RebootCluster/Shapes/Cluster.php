<?php

namespace Sunaoka\Aws\Structures\Redshift\RebootCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $NodeType
 * @property string|null $ClusterStatus
 * @property string|null $ClusterAvailabilityStatus
 * @property string|null $ModifyStatus
 * @property string|null $MasterUsername
 * @property string|null $DBName
 * @property Endpoint|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property list<ClusterSecurityGroupMembership>|null $ClusterSecurityGroups
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property list<ClusterParameterGroupStatus>|null $ClusterParameterGroups
 * @property string|null $ClusterSubnetGroupName
 * @property string|null $VpcId
 * @property string|null $AvailabilityZone
 * @property string|null $PreferredMaintenanceWindow
 * @property PendingModifiedValues|null $PendingModifiedValues
 * @property string|null $ClusterVersion
 * @property bool|null $AllowVersionUpgrade
 * @property int|null $NumberOfNodes
 * @property bool|null $PubliclyAccessible
 * @property bool|null $Encrypted
 * @property RestoreStatus|null $RestoreStatus
 * @property DataTransferProgress|null $DataTransferProgress
 * @property HsmStatus|null $HsmStatus
 * @property ClusterSnapshotCopyStatus|null $ClusterSnapshotCopyStatus
 * @property string|null $ClusterPublicKey
 * @property list<ClusterNode>|null $ClusterNodes
 * @property ElasticIpStatus|null $ElasticIpStatus
 * @property string|null $ClusterRevisionNumber
 * @property list<Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnhancedVpcRouting
 * @property list<ClusterIamRole>|null $IamRoles
 * @property list<string>|null $PendingActions
 * @property string|null $MaintenanceTrackName
 * @property string|null $ElasticResizeNumberOfNodeOptions
 * @property list<DeferredMaintenanceWindow>|null $DeferredMaintenanceWindows
 * @property string|null $SnapshotScheduleIdentifier
 * @property 'MODIFYING'|'ACTIVE'|'FAILED'|null $SnapshotScheduleState
 * @property \Aws\Api\DateTimeResult|null $ExpectedNextSnapshotScheduleTime
 * @property string|null $ExpectedNextSnapshotScheduleTimeStatus
 * @property \Aws\Api\DateTimeResult|null $NextMaintenanceWindowStartTime
 * @property ResizeInfo|null $ResizeInfo
 * @property string|null $AvailabilityZoneRelocationStatus
 * @property string|null $ClusterNamespaceArn
 * @property int|null $TotalStorageCapacityInMegaBytes
 * @property AquaConfiguration|null $AquaConfiguration
 * @property string|null $DefaultIamRoleArn
 * @property ReservedNodeExchangeStatus|null $ReservedNodeExchangeStatus
 * @property string|null $CustomDomainName
 * @property string|null $CustomDomainCertificateArn
 * @property \Aws\Api\DateTimeResult|null $CustomDomainCertificateExpiryDate
 * @property string|null $MasterPasswordSecretArn
 * @property string|null $MasterPasswordSecretKmsKeyId
 * @property string|null $IpAddressType
 * @property string|null $MultiAZ
 * @property SecondaryClusterInfo|null $MultiAZSecondary
 * @property string|null $LakehouseRegistrationStatus
 * @property string|null $CatalogArn
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     NodeType?: string|null,
     *     ClusterStatus?: string|null,
     *     ClusterAvailabilityStatus?: string|null,
     *     ModifyStatus?: string|null,
     *     MasterUsername?: string|null,
     *     DBName?: string|null,
     *     Endpoint?: Endpoint|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     ClusterSecurityGroups?: list<ClusterSecurityGroupMembership>|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     ClusterParameterGroups?: list<ClusterParameterGroupStatus>|null,
     *     ClusterSubnetGroupName?: string|null,
     *     VpcId?: string|null,
     *     AvailabilityZone?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: PendingModifiedValues|null,
     *     ClusterVersion?: string|null,
     *     AllowVersionUpgrade?: bool|null,
     *     NumberOfNodes?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     Encrypted?: bool|null,
     *     RestoreStatus?: RestoreStatus|null,
     *     DataTransferProgress?: DataTransferProgress|null,
     *     HsmStatus?: HsmStatus|null,
     *     ClusterSnapshotCopyStatus?: ClusterSnapshotCopyStatus|null,
     *     ClusterPublicKey?: string|null,
     *     ClusterNodes?: list<ClusterNode>|null,
     *     ElasticIpStatus?: ElasticIpStatus|null,
     *     ClusterRevisionNumber?: string|null,
     *     Tags?: list<Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnhancedVpcRouting?: bool|null,
     *     IamRoles?: list<ClusterIamRole>|null,
     *     PendingActions?: list<string>|null,
     *     MaintenanceTrackName?: string|null,
     *     ElasticResizeNumberOfNodeOptions?: string|null,
     *     DeferredMaintenanceWindows?: list<DeferredMaintenanceWindow>|null,
     *     SnapshotScheduleIdentifier?: string|null,
     *     SnapshotScheduleState?: 'MODIFYING'|'ACTIVE'|'FAILED'|null,
     *     ExpectedNextSnapshotScheduleTime?: \Aws\Api\DateTimeResult|null,
     *     ExpectedNextSnapshotScheduleTimeStatus?: string|null,
     *     NextMaintenanceWindowStartTime?: \Aws\Api\DateTimeResult|null,
     *     ResizeInfo?: ResizeInfo|null,
     *     AvailabilityZoneRelocationStatus?: string|null,
     *     ClusterNamespaceArn?: string|null,
     *     TotalStorageCapacityInMegaBytes?: int|null,
     *     AquaConfiguration?: AquaConfiguration|null,
     *     DefaultIamRoleArn?: string|null,
     *     ReservedNodeExchangeStatus?: ReservedNodeExchangeStatus|null,
     *     CustomDomainName?: string|null,
     *     CustomDomainCertificateArn?: string|null,
     *     CustomDomainCertificateExpiryDate?: \Aws\Api\DateTimeResult|null,
     *     MasterPasswordSecretArn?: string|null,
     *     MasterPasswordSecretKmsKeyId?: string|null,
     *     IpAddressType?: string|null,
     *     MultiAZ?: string|null,
     *     MultiAZSecondary?: SecondaryClusterInfo|null,
     *     LakehouseRegistrationStatus?: string|null,
     *     CatalogArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
