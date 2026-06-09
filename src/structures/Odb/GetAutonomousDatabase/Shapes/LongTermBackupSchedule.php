<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isDisabled
 * @property 'ONE_TIME'|'WEEKLY'|'MONTHLY'|'YEARLY'|null $repeatCadence
 * @property int<90, 3650>|null $retentionPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $timeOfBackup
 */
class LongTermBackupSchedule extends Shape
{
    /**
     * @param array{
     *     isDisabled?: bool|null,
     *     repeatCadence?: 'ONE_TIME'|'WEEKLY'|'MONTHLY'|'YEARLY'|null,
     *     retentionPeriodInDays?: int<90, 3650>|null,
     *     timeOfBackup?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
