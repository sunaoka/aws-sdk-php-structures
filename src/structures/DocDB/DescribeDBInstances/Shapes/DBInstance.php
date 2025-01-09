<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $DBInstanceStatus
 * @property Endpoint $Endpoint
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property string $PreferredBackupWindow
 * @property int $BackupRetentionPeriod
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property string $AvailabilityZone
 * @property DBSubnetGroup $DBSubnetGroup
 * @property string $PreferredMaintenanceWindow
 * @property PendingModifiedValues $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult $LatestRestorableTime
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property bool $PubliclyAccessible
 * @property list<DBInstanceStatusInfo> $StatusInfos
 * @property string $DBClusterIdentifier
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbiResourceId
 * @property string $CACertificateIdentifier
 * @property bool $CopyTagsToSnapshot
 * @property int $PromotionTier
 * @property string $DBInstanceArn
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property CertificateDetails $CertificateDetails
 * @property bool $PerformanceInsightsEnabled
 * @property string $PerformanceInsightsKMSKeyId
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     DBInstanceClass?: string,
     *     Engine?: string,
     *     DBInstanceStatus?: string,
     *     Endpoint?: Endpoint,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     PreferredBackupWindow?: string,
     *     BackupRetentionPeriod?: int,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     AvailabilityZone?: string,
     *     DBSubnetGroup?: DBSubnetGroup,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: PendingModifiedValues,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     PubliclyAccessible?: bool,
     *     StatusInfos?: list<DBInstanceStatusInfo>,
     *     DBClusterIdentifier?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbiResourceId?: string,
     *     CACertificateIdentifier?: string,
     *     CopyTagsToSnapshot?: bool,
     *     PromotionTier?: int,
     *     DBInstanceArn?: string,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     CertificateDetails?: CertificateDetails,
     *     PerformanceInsightsEnabled?: bool,
     *     PerformanceInsightsKMSKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
