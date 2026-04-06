<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationARN
 * @property string|null $ApplicationDescription
 * @property string $ApplicationName
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 * @property string|null $ServiceExecutionRole
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK' $ApplicationStatus
 * @property int<1, 999999999> $ApplicationVersionId
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property ApplicationConfigurationDescription|null $ApplicationConfigurationDescription
 * @property list<CloudWatchLoggingOptionDescription>|null $CloudWatchLoggingOptionDescriptions
 * @property ApplicationMaintenanceConfigurationDescription|null $ApplicationMaintenanceConfigurationDescription
 * @property int<1, 999999999>|null $ApplicationVersionUpdatedFrom
 * @property int<1, 999999999>|null $ApplicationVersionRolledBackFrom
 * @property \Aws\Api\DateTimeResult|null $ApplicationVersionCreateTimestamp
 * @property string|null $ConditionalToken
 * @property int<1, 999999999>|null $ApplicationVersionRolledBackTo
 * @property 'STREAMING'|'INTERACTIVE'|null $ApplicationMode
 */
class ApplicationDetail extends Shape
{
    /**
     * @param array{
     *     ApplicationARN: string,
     *     ApplicationDescription?: string|null,
     *     ApplicationName: string,
     *     RuntimeEnvironment: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20',
     *     ServiceExecutionRole?: string|null,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK',
     *     ApplicationVersionId: int<1, 999999999>,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ApplicationConfigurationDescription?: ApplicationConfigurationDescription|null,
     *     CloudWatchLoggingOptionDescriptions?: list<CloudWatchLoggingOptionDescription>|null,
     *     ApplicationMaintenanceConfigurationDescription?: ApplicationMaintenanceConfigurationDescription|null,
     *     ApplicationVersionUpdatedFrom?: int<1, 999999999>|null,
     *     ApplicationVersionRolledBackFrom?: int<1, 999999999>|null,
     *     ApplicationVersionCreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ConditionalToken?: string|null,
     *     ApplicationVersionRolledBackTo?: int<1, 999999999>|null,
     *     ApplicationMode?: 'STREAMING'|'INTERACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
