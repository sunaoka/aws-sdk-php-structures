<?php

namespace Sunaoka\Aws\Structures\Iot\CreateScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY' $frequency
 * @property string $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $dayOfWeek
 * @property list<string> $targetCheckNames
 * @property string $scheduledAuditName
 * @property list<Shapes\Tag> $tags
 */
class CreateScheduledAuditRequest extends Request
{
    /**
     * @param array{
     *     frequency: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY',
     *     dayOfMonth?: string,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT',
     *     targetCheckNames: list<string>,
     *     scheduledAuditName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
