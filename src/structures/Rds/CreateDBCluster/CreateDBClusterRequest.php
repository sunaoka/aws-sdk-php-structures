<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string|null $CharacterSetName
 * @property string|null $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $DBSubnetGroupName
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $MasterUsername
 * @property string|null $MasterUserPassword
 * @property string|null $OptionGroupName
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ReplicationSourceIdentifier
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 * @property string|null $DestinationRegion
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property int|null $BacktrackWindow
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property string|null $EngineMode
 * @property Shapes\ScalingConfiguration|null $ScalingConfiguration
 * @property Shapes\RdsCustomClusterConfiguration|null $RdsCustomClusterConfiguration
 * @property bool|null $DeletionProtection
 * @property string|null $GlobalClusterIdentifier
 * @property bool|null $EnableHttpEndpoint
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property bool|null $EnableGlobalWriteForwarding
 * @property string|null $DBClusterInstanceClass
 * @property int|null $AllocatedStorage
 * @property string|null $StorageType
 * @property int|null $Iops
 * @property bool|null $PubliclyAccessible
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property bool|null $EnableLimitlessDatabase
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property string|null $NetworkType
 * @property 'standard'|'limitless'|null $ClusterScalabilityType
 * @property string|null $DBSystemId
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property bool|null $EnableLocalWriteForwarding
 * @property string|null $CACertificateIdentifier
 * @property string|null $EngineLifecycleSupport
 * @property 'password'|'iam-db-auth'|null $MasterUserAuthenticationType
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     CharacterSetName?: string|null,
     *     DatabaseName?: string|null,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     DBSubnetGroupName?: string|null,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     MasterUsername?: string|null,
     *     MasterUserPassword?: string|null,
     *     OptionGroupName?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ReplicationSourceIdentifier?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null,
     *     DestinationRegion?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     BacktrackWindow?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     EngineMode?: string|null,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration|null,
     *     RdsCustomClusterConfiguration?: Shapes\RdsCustomClusterConfiguration|null,
     *     DeletionProtection?: bool|null,
     *     GlobalClusterIdentifier?: string|null,
     *     EnableHttpEndpoint?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     EnableGlobalWriteForwarding?: bool|null,
     *     DBClusterInstanceClass?: string|null,
     *     AllocatedStorage?: int|null,
     *     StorageType?: string|null,
     *     Iops?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnableLimitlessDatabase?: bool|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     NetworkType?: string|null,
     *     ClusterScalabilityType?: 'standard'|'limitless'|null,
     *     DBSystemId?: string|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     EnableLocalWriteForwarding?: bool|null,
     *     CACertificateIdentifier?: string|null,
     *     EngineLifecycleSupport?: string|null,
     *     MasterUserAuthenticationType?: 'password'|'iam-db-auth'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
