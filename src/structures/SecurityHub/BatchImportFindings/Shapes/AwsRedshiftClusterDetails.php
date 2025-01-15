<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowVersionUpgrade
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property string|null $AvailabilityZone
 * @property string|null $ClusterAvailabilityStatus
 * @property string|null $ClusterCreateTime
 * @property string|null $ClusterIdentifier
 * @property list<AwsRedshiftClusterClusterNode>|null $ClusterNodes
 * @property list<AwsRedshiftClusterClusterParameterGroup>|null $ClusterParameterGroups
 * @property string|null $ClusterPublicKey
 * @property string|null $ClusterRevisionNumber
 * @property list<AwsRedshiftClusterClusterSecurityGroup>|null $ClusterSecurityGroups
 * @property AwsRedshiftClusterClusterSnapshotCopyStatus|null $ClusterSnapshotCopyStatus
 * @property string|null $ClusterStatus
 * @property string|null $ClusterSubnetGroupName
 * @property string|null $ClusterVersion
 * @property string|null $DBName
 * @property list<AwsRedshiftClusterDeferredMaintenanceWindow>|null $DeferredMaintenanceWindows
 * @property AwsRedshiftClusterElasticIpStatus|null $ElasticIpStatus
 * @property string|null $ElasticResizeNumberOfNodeOptions
 * @property bool|null $Encrypted
 * @property AwsRedshiftClusterEndpoint|null $Endpoint
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $ExpectedNextSnapshotScheduleTime
 * @property string|null $ExpectedNextSnapshotScheduleTimeStatus
 * @property AwsRedshiftClusterHsmStatus|null $HsmStatus
 * @property list<AwsRedshiftClusterIamRole>|null $IamRoles
 * @property string|null $KmsKeyId
 * @property string|null $MaintenanceTrackName
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property string|null $MasterUsername
 * @property string|null $NextMaintenanceWindowStartTime
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property list<string>|null $PendingActions
 * @property AwsRedshiftClusterPendingModifiedValues|null $PendingModifiedValues
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $PubliclyAccessible
 * @property AwsRedshiftClusterResizeInfo|null $ResizeInfo
 * @property AwsRedshiftClusterRestoreStatus|null $RestoreStatus
 * @property string|null $SnapshotScheduleIdentifier
 * @property string|null $SnapshotScheduleState
 * @property string|null $VpcId
 * @property list<AwsRedshiftClusterVpcSecurityGroup>|null $VpcSecurityGroups
 * @property AwsRedshiftClusterLoggingStatus|null $LoggingStatus
 */
class AwsRedshiftClusterDetails extends Shape
{
    /**
     * @param array{
     *     AllowVersionUpgrade?: bool|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     AvailabilityZone?: string|null,
     *     ClusterAvailabilityStatus?: string|null,
     *     ClusterCreateTime?: string|null,
     *     ClusterIdentifier?: string|null,
     *     ClusterNodes?: list<AwsRedshiftClusterClusterNode>|null,
     *     ClusterParameterGroups?: list<AwsRedshiftClusterClusterParameterGroup>|null,
     *     ClusterPublicKey?: string|null,
     *     ClusterRevisionNumber?: string|null,
     *     ClusterSecurityGroups?: list<AwsRedshiftClusterClusterSecurityGroup>|null,
     *     ClusterSnapshotCopyStatus?: AwsRedshiftClusterClusterSnapshotCopyStatus|null,
     *     ClusterStatus?: string|null,
     *     ClusterSubnetGroupName?: string|null,
     *     ClusterVersion?: string|null,
     *     DBName?: string|null,
     *     DeferredMaintenanceWindows?: list<AwsRedshiftClusterDeferredMaintenanceWindow>|null,
     *     ElasticIpStatus?: AwsRedshiftClusterElasticIpStatus|null,
     *     ElasticResizeNumberOfNodeOptions?: string|null,
     *     Encrypted?: bool|null,
     *     Endpoint?: AwsRedshiftClusterEndpoint|null,
     *     EnhancedVpcRouting?: bool|null,
     *     ExpectedNextSnapshotScheduleTime?: string|null,
     *     ExpectedNextSnapshotScheduleTimeStatus?: string|null,
     *     HsmStatus?: AwsRedshiftClusterHsmStatus|null,
     *     IamRoles?: list<AwsRedshiftClusterIamRole>|null,
     *     KmsKeyId?: string|null,
     *     MaintenanceTrackName?: string|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     MasterUsername?: string|null,
     *     NextMaintenanceWindowStartTime?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     PendingActions?: list<string>|null,
     *     PendingModifiedValues?: AwsRedshiftClusterPendingModifiedValues|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     ResizeInfo?: AwsRedshiftClusterResizeInfo|null,
     *     RestoreStatus?: AwsRedshiftClusterRestoreStatus|null,
     *     SnapshotScheduleIdentifier?: string|null,
     *     SnapshotScheduleState?: string|null,
     *     VpcId?: string|null,
     *     VpcSecurityGroups?: list<AwsRedshiftClusterVpcSecurityGroup>|null,
     *     LoggingStatus?: AwsRedshiftClusterLoggingStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
