<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property Schedule|null $Schedule
 * @property list<string>|null $ColumnNameList
 * @property string|null $CatalogID
 * @property string|null $Role
 * @property double|null $SampleSize
 * @property string|null $SecurityConfiguration
 * @property 'CRON'|'AUTO'|null $ScheduleType
 * @property 'CATALOG'|'TABLE'|null $SettingSource
 * @property ExecutionAttempt|null $LastExecutionAttempt
 */
class ColumnStatisticsTaskSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     Schedule?: Schedule|null,
     *     ColumnNameList?: list<string>|null,
     *     CatalogID?: string|null,
     *     Role?: string|null,
     *     SampleSize?: double|null,
     *     SecurityConfiguration?: string|null,
     *     ScheduleType?: 'CRON'|'AUTO'|null,
     *     SettingSource?: 'CATALOG'|'TABLE'|null,
     *     LastExecutionAttempt?: ExecutionAttempt|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
