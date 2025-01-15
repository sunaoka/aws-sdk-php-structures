<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HistoryRecordEntry>|null $HistoryRecords
 * @property \Aws\Api\DateTimeResult|null $LastEvaluatedTime
 * @property string|null $NextToken
 * @property string|null $FleetId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class DescribeFleetHistoryResponse extends Response
{
}
