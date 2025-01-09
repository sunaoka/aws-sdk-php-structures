<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RestoreType
 * @property string $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $RestoreToTime
 * @property bool $UseLatestRestorableTime
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property string $OptionGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnableIAMDatabaseAuthentication
 * @property int $BacktrackWindow
 * @property list<string> $EnableCloudwatchLogsExports
 * @property string $DBClusterParameterGroupName
 * @property bool $DeletionProtection
 * @property bool $CopyTagsToSnapshot
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property Shapes\ScalingConfiguration $ScalingConfiguration
 * @property string $EngineMode
 * @property string $DBClusterInstanceClass
 * @property string $StorageType
 * @property bool $PubliclyAccessible
 * @property int $Iops
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property string $SourceDbClusterResourceId
 * @property Shapes\RdsCustomClusterConfiguration $RdsCustomClusterConfiguration
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property string $EngineLifecycleSupport
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string,
     *     SourceDBClusterIdentifier?: string,
     *     RestoreToTime?: \Aws\Api\DateTimeResult,
     *     UseLatestRestorableTime?: bool,
     *     Port?: int,
     *     DBSubnetGroupName?: string,
     *     OptionGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     BacktrackWindow?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DBClusterParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration,
     *     EngineMode?: string,
     *     DBClusterInstanceClass?: string,
     *     StorageType?: string,
     *     PubliclyAccessible?: bool,
     *     Iops?: int,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     NetworkType?: string,
     *     SourceDbClusterResourceId?: string,
     *     RdsCustomClusterConfiguration?: Shapes\RdsCustomClusterConfiguration,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
