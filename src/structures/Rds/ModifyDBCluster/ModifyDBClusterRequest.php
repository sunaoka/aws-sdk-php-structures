<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $NewDBClusterIdentifier
 * @property bool|null $ApplyImmediately
 * @property int|null $BackupRetentionPeriod
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property int|null $Port
 * @property string|null $MasterUserPassword
 * @property string|null $OptionGroupName
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property int|null $BacktrackWindow
 * @property Shapes\CloudwatchLogsExportConfiguration|null $CloudwatchLogsExportConfiguration
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property string|null $DBInstanceParameterGroupName
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property Shapes\ScalingConfiguration|null $ScalingConfiguration
 * @property bool|null $DeletionProtection
 * @property bool|null $EnableHttpEndpoint
 * @property bool|null $CopyTagsToSnapshot
 * @property bool|null $EnableGlobalWriteForwarding
 * @property string|null $DBClusterInstanceClass
 * @property int|null $AllocatedStorage
 * @property string|null $StorageType
 * @property int|null $Iops
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $NetworkType
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property bool|null $ManageMasterUserPassword
 * @property bool|null $RotateMasterUserPassword
 * @property bool|null $EnableLocalWriteForwarding
 * @property string|null $MasterUserSecretKmsKeyId
 * @property string|null $EngineMode
 * @property bool|null $AllowEngineModeChange
 * @property string|null $AwsBackupRecoveryPointArn
 * @property bool|null $EnableLimitlessDatabase
 * @property string|null $CACertificateIdentifier
 * @property 'password'|'iam-db-auth'|null $MasterUserAuthenticationType
 */
class ModifyDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     NewDBClusterIdentifier?: string|null,
     *     ApplyImmediately?: bool|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Port?: int|null,
     *     MasterUserPassword?: string|null,
     *     OptionGroupName?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     BacktrackWindow?: int|null,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     DBInstanceParameterGroupName?: string|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration|null,
     *     DeletionProtection?: bool|null,
     *     EnableHttpEndpoint?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     EnableGlobalWriteForwarding?: bool|null,
     *     DBClusterInstanceClass?: string|null,
     *     AllocatedStorage?: int|null,
     *     StorageType?: string|null,
     *     Iops?: int|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     NetworkType?: string|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     ManageMasterUserPassword?: bool|null,
     *     RotateMasterUserPassword?: bool|null,
     *     EnableLocalWriteForwarding?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     EngineMode?: string|null,
     *     AllowEngineModeChange?: bool|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     EnableLimitlessDatabase?: bool|null,
     *     CACertificateIdentifier?: string|null,
     *     MasterUserAuthenticationType?: 'password'|'iam-db-auth'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
