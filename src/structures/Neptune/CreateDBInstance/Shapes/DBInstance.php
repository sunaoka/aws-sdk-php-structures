<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property string|null $Engine
 * @property string|null $DBInstanceStatus
 * @property string|null $MasterUsername
 * @property string|null $DBName
 * @property Endpoint|null $Endpoint
 * @property int|null $AllocatedStorage
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property string|null $PreferredBackupWindow
 * @property int|null $BackupRetentionPeriod
 * @property list<DBSecurityGroupMembership>|null $DBSecurityGroups
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property list<DBParameterGroupStatus>|null $DBParameterGroups
 * @property string|null $AvailabilityZone
 * @property DBSubnetGroup|null $DBSubnetGroup
 * @property string|null $PreferredMaintenanceWindow
 * @property PendingModifiedValues|null $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult|null $LatestRestorableTime
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string>|null $ReadReplicaDBInstanceIdentifiers
 * @property list<string>|null $ReadReplicaDBClusterIdentifiers
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property list<OptionGroupMembership>|null $OptionGroupMemberships
 * @property string|null $CharacterSetName
 * @property string|null $SecondaryAvailabilityZone
 * @property bool|null $PubliclyAccessible
 * @property list<DBInstanceStatusInfo>|null $StatusInfos
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property int|null $DbInstancePort
 * @property string|null $DBClusterIdentifier
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbiResourceId
 * @property string|null $CACertificateIdentifier
 * @property list<DomainMembership>|null $DomainMemberships
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $EnhancedMonitoringResourceArn
 * @property string|null $MonitoringRoleArn
 * @property int|null $PromotionTier
 * @property string|null $DBInstanceArn
 * @property string|null $Timezone
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property bool|null $PerformanceInsightsEnabled
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     Engine?: string|null,
     *     DBInstanceStatus?: string|null,
     *     MasterUsername?: string|null,
     *     DBName?: string|null,
     *     Endpoint?: Endpoint|null,
     *     AllocatedStorage?: int|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     PreferredBackupWindow?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBSecurityGroups?: list<DBSecurityGroupMembership>|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     DBParameterGroups?: list<DBParameterGroupStatus>|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroup?: DBSubnetGroup|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: PendingModifiedValues|null,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     ReadReplicaSourceDBInstanceIdentifier?: string|null,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>|null,
     *     ReadReplicaDBClusterIdentifiers?: list<string>|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     OptionGroupMemberships?: list<OptionGroupMembership>|null,
     *     CharacterSetName?: string|null,
     *     SecondaryAvailabilityZone?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     StatusInfos?: list<DBInstanceStatusInfo>|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     DbInstancePort?: int|null,
     *     DBClusterIdentifier?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbiResourceId?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     DomainMemberships?: list<DomainMembership>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     EnhancedMonitoringResourceArn?: string|null,
     *     MonitoringRoleArn?: string|null,
     *     PromotionTier?: int|null,
     *     DBInstanceArn?: string|null,
     *     Timezone?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     PerformanceInsightsEnabled?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
