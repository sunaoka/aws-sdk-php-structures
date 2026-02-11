<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $RestoreType
 * @property string|null $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $RestoreToTime
 * @property bool|null $UseLatestRestorableTime
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property string|null $OptionGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property int|null $BacktrackWindow
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property string|null $DBClusterParameterGroupName
 * @property bool|null $DeletionProtection
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property string|null $DBClusterInstanceClass
 * @property string|null $StorageType
 * @property bool|null $PubliclyAccessible
 * @property int|null $Iops
 * @property string|null $NetworkType
 * @property string|null $SourceDbClusterResourceId
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property Shapes\ScalingConfiguration|null $ScalingConfiguration
 * @property string|null $EngineMode
 * @property Shapes\RdsCustomClusterConfiguration|null $RdsCustomClusterConfiguration
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property string|null $EngineLifecycleSupport
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string|null,
     *     SourceDBClusterIdentifier?: string|null,
     *     RestoreToTime?: \Aws\Api\DateTimeResult|null,
     *     UseLatestRestorableTime?: bool|null,
     *     Port?: int|null,
     *     DBSubnetGroupName?: string|null,
     *     OptionGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     BacktrackWindow?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DBClusterParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     DBClusterInstanceClass?: string|null,
     *     StorageType?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Iops?: int|null,
     *     NetworkType?: string|null,
     *     SourceDbClusterResourceId?: string|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration|null,
     *     EngineMode?: string|null,
     *     RdsCustomClusterConfiguration?: Shapes\RdsCustomClusterConfiguration|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     EngineLifecycleSupport?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
