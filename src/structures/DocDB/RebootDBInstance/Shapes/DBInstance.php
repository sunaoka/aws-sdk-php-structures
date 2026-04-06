<?php

namespace Sunaoka\Aws\Structures\DocDB\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property string|null $Engine
 * @property string|null $DBInstanceStatus
 * @property Endpoint|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property string|null $PreferredBackupWindow
 * @property int|null $BackupRetentionPeriod
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property string|null $AvailabilityZone
 * @property DBSubnetGroup|null $DBSubnetGroup
 * @property string|null $PreferredMaintenanceWindow
 * @property PendingModifiedValues|null $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult|null $LatestRestorableTime
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property bool|null $PubliclyAccessible
 * @property list<DBInstanceStatusInfo>|null $StatusInfos
 * @property string|null $DBClusterIdentifier
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbiResourceId
 * @property string|null $CACertificateIdentifier
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $PromotionTier
 * @property string|null $DBInstanceArn
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property CertificateDetails|null $CertificateDetails
 * @property bool|null $PerformanceInsightsEnabled
 * @property string|null $PerformanceInsightsKMSKeyId
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     Engine?: string|null,
     *     DBInstanceStatus?: string|null,
     *     Endpoint?: Endpoint|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     PreferredBackupWindow?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroup?: DBSubnetGroup|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: PendingModifiedValues|null,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     PubliclyAccessible?: bool|null,
     *     StatusInfos?: list<DBInstanceStatusInfo>|null,
     *     DBClusterIdentifier?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbiResourceId?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     PromotionTier?: int|null,
     *     DBInstanceArn?: string|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     CertificateDetails?: CertificateDetails|null,
     *     PerformanceInsightsEnabled?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
