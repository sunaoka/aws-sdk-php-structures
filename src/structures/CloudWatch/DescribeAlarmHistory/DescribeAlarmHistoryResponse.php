<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AlarmHistoryItem>|null $AlarmHistoryItems
 * @property string|null $NextToken
 */
class DescribeAlarmHistoryResponse extends Response
{
}
