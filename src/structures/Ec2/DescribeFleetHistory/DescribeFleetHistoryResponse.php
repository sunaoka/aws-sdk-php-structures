<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HistoryRecordEntry> $HistoryRecords
 * @property \Aws\Api\DateTimeResult $LastEvaluatedTime
 * @property string $NextToken
 * @property string $FleetId
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeFleetHistoryResponse extends Response
{
}
