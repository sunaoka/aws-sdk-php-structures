<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY'|null $frequency
 * @property string|null $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null $dayOfWeek
 * @property list<string>|null $targetCheckNames
 * @property string $scheduledAuditName
 */
class UpdateScheduledAuditRequest extends Request
{
    /**
     * @param array{
     *     frequency?: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY'|null,
     *     dayOfMonth?: string|null,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null,
     *     targetCheckNames?: list<string>|null,
     *     scheduledAuditName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
