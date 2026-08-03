<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'CONTINUOUS' $type
 * @property int<1, 365> $retentionDays
 * @property bool $enabled
 * @property string|null $customSchedule
 * @property \Aws\Api\DateTimeResult|null $nextAutomatedBackupTime
 */
class DbBackupConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     type: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'CONTINUOUS',
     *     retentionDays: int<1, 365>,
     *     enabled: bool,
     *     customSchedule?: string|null,
     *     nextAutomatedBackupTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
