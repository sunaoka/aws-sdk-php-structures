<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeScheduledAudit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY'|null $frequency
 * @property string|null $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|null $dayOfWeek
 * @property list<string>|null $targetCheckNames
 * @property string|null $scheduledAuditName
 * @property string|null $scheduledAuditArn
 */
class DescribeScheduledAuditResponse extends Response
{
}
