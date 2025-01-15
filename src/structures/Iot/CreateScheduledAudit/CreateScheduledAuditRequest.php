<?php

namespace Sunaoka\Aws\Structures\Iot\CreateScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY' $frequency
 * @property string|null $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null $dayOfWeek
 * @property list<string> $targetCheckNames
 * @property string $scheduledAuditName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateScheduledAuditRequest extends Request
{
    /**
     * @param array{
     *     frequency: 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY',
     *     dayOfMonth?: string|null,
     *     dayOfWeek?: 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null,
     *     targetCheckNames: list<string>,
     *     scheduledAuditName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
