<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $ApplicationDescription
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 * @property string $ServiceExecutionRole
 * @property Shapes\ApplicationConfiguration|null $ApplicationConfiguration
 * @property list<Shapes\CloudWatchLoggingOption>|null $CloudWatchLoggingOptions
 * @property list<Shapes\Tag>|null $Tags
 * @property 'STREAMING'|'INTERACTIVE'|null $ApplicationMode
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string|null,
     *     RuntimeEnvironment: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20',
     *     ServiceExecutionRole: string,
     *     ApplicationConfiguration?: Shapes\ApplicationConfiguration|null,
     *     CloudWatchLoggingOptions?: list<Shapes\CloudWatchLoggingOption>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ApplicationMode?: 'STREAMING'|'INTERACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
