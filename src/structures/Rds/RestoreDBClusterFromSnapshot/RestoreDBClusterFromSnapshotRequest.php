<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property string $DatabaseName
 * @property string $OptionGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnableIAMDatabaseAuthentication
 * @property int $BacktrackWindow
 * @property list<string> $EnableCloudwatchLogsExports
 * @property string $EngineMode
 * @property Shapes\ScalingConfiguration $ScalingConfiguration
 * @property string $DBClusterParameterGroupName
 * @property bool $DeletionProtection
 * @property bool $CopyTagsToSnapshot
 * @property string $Domain
 * @property string $DomainIAMRoleName
 * @property string $DBClusterInstanceClass
 * @property string $StorageType
 * @property int $Iops
 * @property bool $PubliclyAccessible
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property Shapes\RdsCustomClusterConfiguration $RdsCustomClusterConfiguration
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property string $EngineLifecycleSupport
 */
class RestoreDBClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     DBClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     DBSubnetGroupName?: string,
     *     DatabaseName?: string,
     *     OptionGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     BacktrackWindow?: int,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     EngineMode?: string,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration,
     *     DBClusterParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     Domain?: string,
     *     DomainIAMRoleName?: string,
     *     DBClusterInstanceClass?: string,
     *     StorageType?: string,
     *     Iops?: int,
     *     PubliclyAccessible?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     NetworkType?: string,
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
