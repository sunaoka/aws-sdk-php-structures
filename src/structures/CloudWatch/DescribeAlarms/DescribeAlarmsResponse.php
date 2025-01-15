<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CompositeAlarm>|null $CompositeAlarms
 * @property list<Shapes\MetricAlarm>|null $MetricAlarms
 * @property string|null $NextToken
 */
class DescribeAlarmsResponse extends Response
{
}
