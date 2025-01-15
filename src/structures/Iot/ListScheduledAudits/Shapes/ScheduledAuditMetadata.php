<?php

namespace Sunaoka\Aws\Structures\Iot\ListScheduledAudits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scheduledAuditName
 * @property string|null $scheduledAuditArn
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY'|null $frequency
 * @property string|null $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null $dayOfWeek
 */
class ScheduledAuditMetadata extends Shape
{
    /**
     * @param array{
     *     scheduledAuditName?: string|null,
     *     scheduledAuditArn?: string|null,
     *     frequency?: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY'|null,
     *     dayOfMonth?: string|null,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
