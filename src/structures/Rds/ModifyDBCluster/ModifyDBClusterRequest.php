<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $NewDBClusterIdentifier
 * @property bool $ApplyImmediately
 * @property int $BackupRetentionPeriod
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property int $Port
 * @property string $MasterUserPassword
 * @property string $OptionGroupName
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property bool $EnableIAMDatabaseAuthentication
 * @property int $BacktrackWindow
 * @property Shapes\CloudwatchLogsExportConfiguration $CloudwatchLogsExportConfiguration
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 * @property string $DBInstanceParameterGroupName
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property Shapes\ScalingConfiguration $ScalingConfiguration
 * @property bool $DeletionProtection
 * @property bool $EnableHttpEndpoint
 * @property bool $CopyTagsToSnapshot
 * @property bool $EnableGlobalWriteForwarding
 * @property string $DBClusterInstanceClass
 * @property int $AllocatedStorage
 * @property string $StorageType
 * @property int $Iops
 * @property bool $AutoMinorVersionUpgrade
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property bool $ManageMasterUserPassword
 * @property bool $RotateMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property string $EngineMode
 * @property bool $AllowEngineModeChange
 * @property bool $EnableLocalWriteForwarding
 * @property string $AwsBackupRecoveryPointArn
 * @property bool $EnableLimitlessDatabase
 * @property string $CACertificateIdentifier
 */
class ModifyDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     NewDBClusterIdentifier?: string,
     *     ApplyImmediately?: bool,
     *     BackupRetentionPeriod?: int,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Port?: int,
     *     MasterUserPassword?: string,
     *     OptionGroupName?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     BacktrackWindow?: int,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool,
     *     DBInstanceParameterGroupName?: string,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration,
     *     DeletionProtection?: bool,
     *     EnableHttpEndpoint?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     EnableGlobalWriteForwarding?: bool,
     *     DBClusterInstanceClass?: string,
     *     AllocatedStorage?: int,
     *     StorageType?: string,
     *     Iops?: int,
     *     AutoMinorVersionUpgrade?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     NetworkType?: string,
     *     ManageMasterUserPassword?: bool,
     *     RotateMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     EngineMode?: string,
     *     AllowEngineModeChange?: bool,
     *     EnableLocalWriteForwarding?: bool,
     *     AwsBackupRecoveryPointArn?: string,
     *     EnableLimitlessDatabase?: bool,
     *     CACertificateIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
