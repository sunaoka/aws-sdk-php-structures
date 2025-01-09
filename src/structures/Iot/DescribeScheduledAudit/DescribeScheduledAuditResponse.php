<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeScheduledAudit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'DAILY'|'WEEKLY'|'BIWEEKLY'|'MONTHLY' $frequency
 * @property string $dayOfMonth
 * @property 'SUN'|'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT' $dayOfWeek
 * @property list<string> $targetCheckNames
 * @property string $scheduledAuditName
 * @property string $scheduledAuditArn
 */
class DescribeScheduledAuditResponse extends Response
{
}
