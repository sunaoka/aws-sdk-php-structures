<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Schedule $Schedule
 * @property list<string> $ColumnNameList
 * @property string $CatalogID
 * @property string $Role
 * @property double $SampleSize
 * @property string $SecurityConfiguration
 * @property 'CRON'|'AUTO' $ScheduleType
 * @property 'CATALOG'|'TABLE' $SettingSource
 * @property ExecutionAttempt $LastExecutionAttempt
 */
class ColumnStatisticsTaskSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     TableName?: string,
     *     Schedule?: Schedule,
     *     ColumnNameList?: list<string>,
     *     CatalogID?: string,
     *     Role?: string,
     *     SampleSize?: double,
     *     SecurityConfiguration?: string,
     *     ScheduleType?: 'CRON'|'AUTO',
     *     SettingSource?: 'CATALOG'|'TABLE',
     *     LastExecutionAttempt?: ExecutionAttempt
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
