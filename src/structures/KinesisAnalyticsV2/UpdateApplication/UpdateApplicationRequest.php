<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\ApplicationConfigurationUpdate $ApplicationConfigurationUpdate
 * @property string $ServiceExecutionRoleUpdate
 * @property Shapes\RunConfigurationUpdate $RunConfigurationUpdate
 * @property list<Shapes\CloudWatchLoggingOptionUpdate> $CloudWatchLoggingOptionUpdates
 * @property string $ConditionalToken
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironmentUpdate
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int,
     *     ApplicationConfigurationUpdate?: Shapes\ApplicationConfigurationUpdate,
     *     ServiceExecutionRoleUpdate?: string,
     *     RunConfigurationUpdate?: Shapes\RunConfigurationUpdate,
     *     CloudWatchLoggingOptionUpdates?: list<Shapes\CloudWatchLoggingOptionUpdate>,
     *     ConditionalToken?: string,
     *     RuntimeEnvironmentUpdate?: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
