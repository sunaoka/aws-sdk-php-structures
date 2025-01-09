<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $CharacterSetName
 * @property string $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property string $DBSubnetGroupName
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property string $OptionGroupName
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property string $ReplicationSourceIdentifier
 * @property list<Shapes\Tag> $Tags
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 * @property string $DestinationRegion
 * @property bool $EnableIAMDatabaseAuthentication
 * @property int $BacktrackWindow
 * @property list<string> $EnableCloudwatchLogsExports
 * @property string $EngineMode
 * @property Shapes\ScalingConfiguration $ScalingConfiguration
 * @property Shapes\RdsCustomClusterConfiguration $RdsCustomClusterConfiguration
 * @property bool $DeletionProtection
 * @property string $GlobalClusterIdentifier
 * @property bool $EnableHttpEndpoint
 * @property bool $CopyTagsToSnapshot
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property bool $EnableGlobalWriteForwarding
 * @property string $DBClusterInstanceClass
 * @property int $AllocatedStorage
 * @property string $StorageType
 * @property int $Iops
 * @property bool $PubliclyAccessible
 * @property bool $AutoMinorVersionUpgrade
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property bool $EnableLimitlessDatabase
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property 'standard'|'limitless' $ClusterScalabilityType
 * @property string $DBSystemId
 * @property bool $ManageMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property bool $EnableLocalWriteForwarding
 * @property string $CACertificateIdentifier
 * @property string $EngineLifecycleSupport
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     CharacterSetName?: string,
     *     DatabaseName?: string,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     DBSubnetGroupName?: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     MasterUsername?: string,
     *     MasterUserPassword?: string,
     *     OptionGroupName?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ReplicationSourceIdentifier?: string,
     *     Tags?: list<Shapes\Tag>,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string,
     *     DestinationRegion?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     BacktrackWindow?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     EngineMode?: string,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration,
     *     RdsCustomClusterConfiguration?: Shapes\RdsCustomClusterConfiguration,
     *     DeletionProtection?: bool,
     *     GlobalClusterIdentifier?: string,
     *     EnableHttpEndpoint?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     EnableGlobalWriteForwarding?: bool,
     *     DBClusterInstanceClass?: string,
     *     AllocatedStorage?: int,
     *     StorageType?: string,
     *     Iops?: int,
     *     PubliclyAccessible?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EnableLimitlessDatabase?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     NetworkType?: string,
     *     ClusterScalabilityType?: 'standard'|'limitless',
     *     DBSystemId?: string,
     *     ManageMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     EnableLocalWriteForwarding?: bool,
     *     CACertificateIdentifier?: string,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
