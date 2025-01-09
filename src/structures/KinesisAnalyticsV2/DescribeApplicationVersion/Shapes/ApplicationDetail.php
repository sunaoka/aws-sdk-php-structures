<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationARN
 * @property string $ApplicationDescription
 * @property string $ApplicationName
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 * @property string $ServiceExecutionRole
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK' $ApplicationStatus
 * @property int<1, 999999999> $ApplicationVersionId
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property ApplicationConfigurationDescription $ApplicationConfigurationDescription
 * @property list<CloudWatchLoggingOptionDescription> $CloudWatchLoggingOptionDescriptions
 * @property ApplicationMaintenanceConfigurationDescription $ApplicationMaintenanceConfigurationDescription
 * @property int<1, 999999999> $ApplicationVersionUpdatedFrom
 * @property int<1, 999999999> $ApplicationVersionRolledBackFrom
 * @property \Aws\Api\DateTimeResult $ApplicationVersionCreateTimestamp
 * @property string $ConditionalToken
 * @property int<1, 999999999> $ApplicationVersionRolledBackTo
 * @property 'STREAMING'|'INTERACTIVE' $ApplicationMode
 */
class ApplicationDetail extends Shape
{
    /**
     * @param array{
     *     ApplicationARN: string,
     *     ApplicationDescription?: string,
     *     ApplicationName: string,
     *     RuntimeEnvironment: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20',
     *     ServiceExecutionRole?: string,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK',
     *     ApplicationVersionId: int<1, 999999999>,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     ApplicationConfigurationDescription?: ApplicationConfigurationDescription,
     *     CloudWatchLoggingOptionDescriptions?: list<CloudWatchLoggingOptionDescription>,
     *     ApplicationMaintenanceConfigurationDescription?: ApplicationMaintenanceConfigurationDescription,
     *     ApplicationVersionUpdatedFrom?: int<1, 999999999>,
     *     ApplicationVersionRolledBackFrom?: int<1, 999999999>,
     *     ApplicationVersionCreateTimestamp?: \Aws\Api\DateTimeResult,
     *     ConditionalToken?: string,
     *     ApplicationVersionRolledBackTo?: int<1, 999999999>,
     *     ApplicationMode?: 'STREAMING'|'INTERACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
