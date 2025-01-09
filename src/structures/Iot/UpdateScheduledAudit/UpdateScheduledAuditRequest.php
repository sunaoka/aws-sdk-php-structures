<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY' $frequency
 * @property string $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $dayOfWeek
 * @property list<string> $targetCheckNames
 * @property string $scheduledAuditName
 */
class UpdateScheduledAuditRequest extends Request
{
    /**
     * @param array{
     *     frequency?: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY',
     *     dayOfMonth?: string,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT',
     *     targetCheckNames?: list<string>,
     *     scheduledAuditName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
