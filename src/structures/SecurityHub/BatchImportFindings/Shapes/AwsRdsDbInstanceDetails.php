<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsRdsDbInstanceAssociatedRole>|null $AssociatedRoles
 * @property string|null $CACertificateIdentifier
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property int|null $DbInstancePort
 * @property string|null $DbiResourceId
 * @property string|null $DBName
 * @property bool|null $DeletionProtection
 * @property AwsRdsDbInstanceEndpoint|null $Endpoint
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property string|null $InstanceCreateTime
 * @property string|null $KmsKeyId
 * @property bool|null $PubliclyAccessible
 * @property bool|null $StorageEncrypted
 * @property string|null $TdeCredentialArn
 * @property list<AwsRdsDbInstanceVpcSecurityGroup>|null $VpcSecurityGroups
 * @property bool|null $MultiAz
 * @property string|null $EnhancedMonitoringResourceArn
 * @property string|null $DbInstanceStatus
 * @property string|null $MasterUsername
 * @property int|null $AllocatedStorage
 * @property string|null $PreferredBackupWindow
 * @property int|null $BackupRetentionPeriod
 * @property list<string>|null $DbSecurityGroups
 * @property list<AwsRdsDbParameterGroup>|null $DbParameterGroups
 * @property string|null $AvailabilityZone
 * @property AwsRdsDbSubnetGroup|null $DbSubnetGroup
 * @property string|null $PreferredMaintenanceWindow
 * @property AwsRdsDbPendingModifiedValues|null $PendingModifiedValues
 * @property string|null $LatestRestorableTime
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string>|null $ReadReplicaDBInstanceIdentifiers
 * @property list<string>|null $ReadReplicaDBClusterIdentifiers
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property list<AwsRdsDbOptionGroupMembership>|null $OptionGroupMemberships
 * @property string|null $CharacterSetName
 * @property string|null $SecondaryAvailabilityZone
 * @property list<AwsRdsDbStatusInfo>|null $StatusInfos
 * @property string|null $StorageType
 * @property list<AwsRdsDbDomainMembership>|null $DomainMemberships
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property int|null $PromotionTier
 * @property string|null $Timezone
 * @property bool|null $PerformanceInsightsEnabled
 * @property string|null $PerformanceInsightsKmsKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property list<string>|null $EnabledCloudWatchLogsExports
 * @property list<AwsRdsDbProcessorFeature>|null $ProcessorFeatures
 * @property AwsRdsDbInstanceEndpoint|null $ListenerEndpoint
 * @property int|null $MaxAllocatedStorage
 */
class AwsRdsDbInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AssociatedRoles?: list<AwsRdsDbInstanceAssociatedRole>|null,
     *     CACertificateIdentifier?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     DBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     DbInstancePort?: int|null,
     *     DbiResourceId?: string|null,
     *     DBName?: string|null,
     *     DeletionProtection?: bool|null,
     *     Endpoint?: AwsRdsDbInstanceEndpoint|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     InstanceCreateTime?: string|null,
     *     KmsKeyId?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     StorageEncrypted?: bool|null,
     *     TdeCredentialArn?: string|null,
     *     VpcSecurityGroups?: list<AwsRdsDbInstanceVpcSecurityGroup>|null,
     *     MultiAz?: bool|null,
     *     EnhancedMonitoringResourceArn?: string|null,
     *     DbInstanceStatus?: string|null,
     *     MasterUsername?: string|null,
     *     AllocatedStorage?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     DbSecurityGroups?: list<string>|null,
     *     DbParameterGroups?: list<AwsRdsDbParameterGroup>|null,
     *     AvailabilityZone?: string|null,
     *     DbSubnetGroup?: AwsRdsDbSubnetGroup|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: AwsRdsDbPendingModifiedValues|null,
     *     LatestRestorableTime?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     ReadReplicaSourceDBInstanceIdentifier?: string|null,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>|null,
     *     ReadReplicaDBClusterIdentifiers?: list<string>|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     OptionGroupMemberships?: list<AwsRdsDbOptionGroupMembership>|null,
     *     CharacterSetName?: string|null,
     *     SecondaryAvailabilityZone?: string|null,
     *     StatusInfos?: list<AwsRdsDbStatusInfo>|null,
     *     StorageType?: string|null,
     *     DomainMemberships?: list<AwsRdsDbDomainMembership>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     PromotionTier?: int|null,
     *     Timezone?: string|null,
     *     PerformanceInsightsEnabled?: bool|null,
     *     PerformanceInsightsKmsKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnabledCloudWatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>|null,
     *     ListenerEndpoint?: AwsRdsDbInstanceEndpoint|null,
     *     MaxAllocatedStorage?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
