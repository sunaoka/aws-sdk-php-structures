<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CompositeAlarm> $CompositeAlarms
 * @property list<Shapes\MetricAlarm> $MetricAlarms
 * @property string $NextToken
 */
class DescribeAlarmsResponse extends Response
{
}
