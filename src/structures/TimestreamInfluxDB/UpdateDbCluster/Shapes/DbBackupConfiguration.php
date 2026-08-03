<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'CONTINUOUS' $type
 * @property int<1, 365> $retentionDays
 * @property bool $enabled
 * @property string|null $customSchedule
 */
class DbBackupConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'CONTINUOUS',
     *     retentionDays: int<1, 365>,
     *     enabled: bool,
     *     customSchedule?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
