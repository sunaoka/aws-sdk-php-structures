<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $ApplicationDescription
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 * @property string $ServiceExecutionRole
 * @property Shapes\ApplicationConfiguration $ApplicationConfiguration
 * @property list<Shapes\CloudWatchLoggingOption> $CloudWatchLoggingOptions
 * @property list<Shapes\Tag> $Tags
 * @property 'STREAMING'|'INTERACTIVE' $ApplicationMode
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string,
     *     RuntimeEnvironment: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20',
     *     ServiceExecutionRole: string,
     *     ApplicationConfiguration?: Shapes\ApplicationConfiguration,
     *     CloudWatchLoggingOptions?: list<Shapes\CloudWatchLoggingOption>,
     *     Tags?: list<Shapes\Tag>,
     *     ApplicationMode?: 'STREAMING'|'INTERACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
