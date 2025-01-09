<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsRdsDbInstanceAssociatedRole> $AssociatedRoles
 * @property string $CACertificateIdentifier
 * @property string $DBClusterIdentifier
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property int $DbInstancePort
 * @property string $DbiResourceId
 * @property string $DBName
 * @property bool $DeletionProtection
 * @property AwsRdsDbInstanceEndpoint $Endpoint
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property string $InstanceCreateTime
 * @property string $KmsKeyId
 * @property bool $PubliclyAccessible
 * @property bool $StorageEncrypted
 * @property string $TdeCredentialArn
 * @property list<AwsRdsDbInstanceVpcSecurityGroup> $VpcSecurityGroups
 * @property bool $MultiAz
 * @property string $EnhancedMonitoringResourceArn
 * @property string $DbInstanceStatus
 * @property string $MasterUsername
 * @property int $AllocatedStorage
 * @property string $PreferredBackupWindow
 * @property int $BackupRetentionPeriod
 * @property list<string> $DbSecurityGroups
 * @property list<AwsRdsDbParameterGroup> $DbParameterGroups
 * @property string $AvailabilityZone
 * @property AwsRdsDbSubnetGroup $DbSubnetGroup
 * @property string $PreferredMaintenanceWindow
 * @property AwsRdsDbPendingModifiedValues $PendingModifiedValues
 * @property string $LatestRestorableTime
 * @property bool $AutoMinorVersionUpgrade
 * @property string $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string> $ReadReplicaDBInstanceIdentifiers
 * @property list<string> $ReadReplicaDBClusterIdentifiers
 * @property string $LicenseModel
 * @property int $Iops
 * @property list<AwsRdsDbOptionGroupMembership> $OptionGroupMemberships
 * @property string $CharacterSetName
 * @property string $SecondaryAvailabilityZone
 * @property list<AwsRdsDbStatusInfo> $StatusInfos
 * @property string $StorageType
 * @property list<AwsRdsDbDomainMembership> $DomainMemberships
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property int $PromotionTier
 * @property string $Timezone
 * @property bool $PerformanceInsightsEnabled
 * @property string $PerformanceInsightsKmsKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property list<string> $EnabledCloudWatchLogsExports
 * @property list<AwsRdsDbProcessorFeature> $ProcessorFeatures
 * @property AwsRdsDbInstanceEndpoint $ListenerEndpoint
 * @property int $MaxAllocatedStorage
 */
class AwsRdsDbInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AssociatedRoles?: list<AwsRdsDbInstanceAssociatedRole>,
     *     CACertificateIdentifier?: string,
     *     DBClusterIdentifier?: string,
     *     DBInstanceIdentifier?: string,
     *     DBInstanceClass?: string,
     *     DbInstancePort?: int,
     *     DbiResourceId?: string,
     *     DBName?: string,
     *     DeletionProtection?: bool,
     *     Endpoint?: AwsRdsDbInstanceEndpoint,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     InstanceCreateTime?: string,
     *     KmsKeyId?: string,
     *     PubliclyAccessible?: bool,
     *     StorageEncrypted?: bool,
     *     TdeCredentialArn?: string,
     *     VpcSecurityGroups?: list<AwsRdsDbInstanceVpcSecurityGroup>,
     *     MultiAz?: bool,
     *     EnhancedMonitoringResourceArn?: string,
     *     DbInstanceStatus?: string,
     *     MasterUsername?: string,
     *     AllocatedStorage?: int,
     *     PreferredBackupWindow?: string,
     *     BackupRetentionPeriod?: int,
     *     DbSecurityGroups?: list<string>,
     *     DbParameterGroups?: list<AwsRdsDbParameterGroup>,
     *     AvailabilityZone?: string,
     *     DbSubnetGroup?: AwsRdsDbSubnetGroup,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: AwsRdsDbPendingModifiedValues,
     *     LatestRestorableTime?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     ReadReplicaSourceDBInstanceIdentifier?: string,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>,
     *     ReadReplicaDBClusterIdentifiers?: list<string>,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupMemberships?: list<AwsRdsDbOptionGroupMembership>,
     *     CharacterSetName?: string,
     *     SecondaryAvailabilityZone?: string,
     *     StatusInfos?: list<AwsRdsDbStatusInfo>,
     *     StorageType?: string,
     *     DomainMemberships?: list<AwsRdsDbDomainMembership>,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     PromotionTier?: int,
     *     Timezone?: string,
     *     PerformanceInsightsEnabled?: bool,
     *     PerformanceInsightsKmsKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EnabledCloudWatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>,
     *     ListenerEndpoint?: AwsRdsDbInstanceEndpoint,
     *     MaxAllocatedStorage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
