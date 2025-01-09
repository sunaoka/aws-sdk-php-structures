<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $DBInstanceStatus
 * @property string $MasterUsername
 * @property string $DBName
 * @property Endpoint $Endpoint
 * @property int $AllocatedStorage
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property string $PreferredBackupWindow
 * @property int $BackupRetentionPeriod
 * @property list<DBSecurityGroupMembership> $DBSecurityGroups
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property list<DBParameterGroupStatus> $DBParameterGroups
 * @property string $AvailabilityZone
 * @property DBSubnetGroup $DBSubnetGroup
 * @property string $PreferredMaintenanceWindow
 * @property PendingModifiedValues $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult $LatestRestorableTime
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property string $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string> $ReadReplicaDBInstanceIdentifiers
 * @property list<string> $ReadReplicaDBClusterIdentifiers
 * @property string $LicenseModel
 * @property int $Iops
 * @property list<OptionGroupMembership> $OptionGroupMemberships
 * @property string $CharacterSetName
 * @property string $SecondaryAvailabilityZone
 * @property bool $PubliclyAccessible
 * @property list<DBInstanceStatusInfo> $StatusInfos
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property int $DbInstancePort
 * @property string $DBClusterIdentifier
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbiResourceId
 * @property string $CACertificateIdentifier
 * @property list<DomainMembership> $DomainMemberships
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $EnhancedMonitoringResourceArn
 * @property string $MonitoringRoleArn
 * @property int $PromotionTier
 * @property string $DBInstanceArn
 * @property string $Timezone
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property bool $PerformanceInsightsEnabled
 * @property string $PerformanceInsightsKMSKeyId
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property bool $DeletionProtection
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     DBInstanceClass?: string,
     *     Engine?: string,
     *     DBInstanceStatus?: string,
     *     MasterUsername?: string,
     *     DBName?: string,
     *     Endpoint?: Endpoint,
     *     AllocatedStorage?: int,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     PreferredBackupWindow?: string,
     *     BackupRetentionPeriod?: int,
     *     DBSecurityGroups?: list<DBSecurityGroupMembership>,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     DBParameterGroups?: list<DBParameterGroupStatus>,
     *     AvailabilityZone?: string,
     *     DBSubnetGroup?: DBSubnetGroup,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: PendingModifiedValues,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     ReadReplicaSourceDBInstanceIdentifier?: string,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>,
     *     ReadReplicaDBClusterIdentifiers?: list<string>,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupMemberships?: list<OptionGroupMembership>,
     *     CharacterSetName?: string,
     *     SecondaryAvailabilityZone?: string,
     *     PubliclyAccessible?: bool,
     *     StatusInfos?: list<DBInstanceStatusInfo>,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     DbInstancePort?: int,
     *     DBClusterIdentifier?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbiResourceId?: string,
     *     CACertificateIdentifier?: string,
     *     DomainMemberships?: list<DomainMembership>,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     EnhancedMonitoringResourceArn?: string,
     *     MonitoringRoleArn?: string,
     *     PromotionTier?: int,
     *     DBInstanceArn?: string,
     *     Timezone?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     PerformanceInsightsEnabled?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
