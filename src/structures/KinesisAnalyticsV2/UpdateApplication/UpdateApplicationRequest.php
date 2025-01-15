<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999>|null $CurrentApplicationVersionId
 * @property Shapes\ApplicationConfigurationUpdate|null $ApplicationConfigurationUpdate
 * @property string|null $ServiceExecutionRoleUpdate
 * @property Shapes\RunConfigurationUpdate|null $RunConfigurationUpdate
 * @property list<Shapes\CloudWatchLoggingOptionUpdate>|null $CloudWatchLoggingOptionUpdates
 * @property string|null $ConditionalToken
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'|null $RuntimeEnvironmentUpdate
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>|null,
     *     ApplicationConfigurationUpdate?: Shapes\ApplicationConfigurationUpdate|null,
     *     ServiceExecutionRoleUpdate?: string|null,
     *     RunConfigurationUpdate?: Shapes\RunConfigurationUpdate|null,
     *     CloudWatchLoggingOptionUpdates?: list<Shapes\CloudWatchLoggingOptionUpdate>|null,
     *     ConditionalToken?: string|null,
     *     RuntimeEnvironmentUpdate?: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
