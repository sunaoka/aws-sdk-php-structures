<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowVersionUpgrade
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property string $AvailabilityZone
 * @property string $ClusterAvailabilityStatus
 * @property string $ClusterCreateTime
 * @property string $ClusterIdentifier
 * @property list<AwsRedshiftClusterClusterNode> $ClusterNodes
 * @property list<AwsRedshiftClusterClusterParameterGroup> $ClusterParameterGroups
 * @property string $ClusterPublicKey
 * @property string $ClusterRevisionNumber
 * @property list<AwsRedshiftClusterClusterSecurityGroup> $ClusterSecurityGroups
 * @property AwsRedshiftClusterClusterSnapshotCopyStatus $ClusterSnapshotCopyStatus
 * @property string $ClusterStatus
 * @property string $ClusterSubnetGroupName
 * @property string $ClusterVersion
 * @property string $DBName
 * @property list<AwsRedshiftClusterDeferredMaintenanceWindow> $DeferredMaintenanceWindows
 * @property AwsRedshiftClusterElasticIpStatus $ElasticIpStatus
 * @property string $ElasticResizeNumberOfNodeOptions
 * @property bool $Encrypted
 * @property AwsRedshiftClusterEndpoint $Endpoint
 * @property bool $EnhancedVpcRouting
 * @property string $ExpectedNextSnapshotScheduleTime
 * @property string $ExpectedNextSnapshotScheduleTimeStatus
 * @property AwsRedshiftClusterHsmStatus $HsmStatus
 * @property list<AwsRedshiftClusterIamRole> $IamRoles
 * @property string $KmsKeyId
 * @property string $MaintenanceTrackName
 * @property int $ManualSnapshotRetentionPeriod
 * @property string $MasterUsername
 * @property string $NextMaintenanceWindowStartTime
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property list<string> $PendingActions
 * @property AwsRedshiftClusterPendingModifiedValues $PendingModifiedValues
 * @property string $PreferredMaintenanceWindow
 * @property bool $PubliclyAccessible
 * @property AwsRedshiftClusterResizeInfo $ResizeInfo
 * @property AwsRedshiftClusterRestoreStatus $RestoreStatus
 * @property string $SnapshotScheduleIdentifier
 * @property string $SnapshotScheduleState
 * @property string $VpcId
 * @property list<AwsRedshiftClusterVpcSecurityGroup> $VpcSecurityGroups
 * @property AwsRedshiftClusterLoggingStatus $LoggingStatus
 */
class AwsRedshiftClusterDetails extends Shape
{
    /**
     * @param array{
     *     AllowVersionUpgrade?: bool,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     AvailabilityZone?: string,
     *     ClusterAvailabilityStatus?: string,
     *     ClusterCreateTime?: string,
     *     ClusterIdentifier?: string,
     *     ClusterNodes?: list<AwsRedshiftClusterClusterNode>,
     *     ClusterParameterGroups?: list<AwsRedshiftClusterClusterParameterGroup>,
     *     ClusterPublicKey?: string,
     *     ClusterRevisionNumber?: string,
     *     ClusterSecurityGroups?: list<AwsRedshiftClusterClusterSecurityGroup>,
     *     ClusterSnapshotCopyStatus?: AwsRedshiftClusterClusterSnapshotCopyStatus,
     *     ClusterStatus?: string,
     *     ClusterSubnetGroupName?: string,
     *     ClusterVersion?: string,
     *     DBName?: string,
     *     DeferredMaintenanceWindows?: list<AwsRedshiftClusterDeferredMaintenanceWindow>,
     *     ElasticIpStatus?: AwsRedshiftClusterElasticIpStatus,
     *     ElasticResizeNumberOfNodeOptions?: string,
     *     Encrypted?: bool,
     *     Endpoint?: AwsRedshiftClusterEndpoint,
     *     EnhancedVpcRouting?: bool,
     *     ExpectedNextSnapshotScheduleTime?: string,
     *     ExpectedNextSnapshotScheduleTimeStatus?: string,
     *     HsmStatus?: AwsRedshiftClusterHsmStatus,
     *     IamRoles?: list<AwsRedshiftClusterIamRole>,
     *     KmsKeyId?: string,
     *     MaintenanceTrackName?: string,
     *     ManualSnapshotRetentionPeriod?: int,
     *     MasterUsername?: string,
     *     NextMaintenanceWindowStartTime?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     PendingActions?: list<string>,
     *     PendingModifiedValues?: AwsRedshiftClusterPendingModifiedValues,
     *     PreferredMaintenanceWindow?: string,
     *     PubliclyAccessible?: bool,
     *     ResizeInfo?: AwsRedshiftClusterResizeInfo,
     *     RestoreStatus?: AwsRedshiftClusterRestoreStatus,
     *     SnapshotScheduleIdentifier?: string,
     *     SnapshotScheduleState?: string,
     *     VpcId?: string,
     *     VpcSecurityGroups?: list<AwsRedshiftClusterVpcSecurityGroup>,
     *     LoggingStatus?: AwsRedshiftClusterLoggingStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
