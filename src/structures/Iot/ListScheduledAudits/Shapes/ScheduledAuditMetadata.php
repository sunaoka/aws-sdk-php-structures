<?php

namespace Sunaoka\Aws\Structures\Iot\ListScheduledAudits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scheduledAuditName
 * @property string $scheduledAuditArn
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY' $frequency
 * @property string $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $dayOfWeek
 */
class ScheduledAuditMetadata extends Shape
{
    /**
     * @param array{
     *     scheduledAuditName?: string,
     *     scheduledAuditArn?: string,
     *     frequency?: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY',
     *     dayOfMonth?: string,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
