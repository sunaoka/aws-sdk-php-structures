<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $ApplicationARN
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK' $ApplicationStatus
 * @property int $ApplicationVersionId
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 * @property 'STREAMING'|'INTERACTIVE' $ApplicationMode
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationARN: string,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK',
     *     ApplicationVersionId: int,
     *     RuntimeEnvironment: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20',
     *     ApplicationMode?: 'STREAMING'|'INTERACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
