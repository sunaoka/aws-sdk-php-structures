<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HistoryRecord>|null $HistoryRecords
 * @property \Aws\Api\DateTimeResult|null $LastEvaluatedTime
 * @property string|null $NextToken
 * @property string|null $SpotFleetRequestId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class DescribeSpotFleetRequestHistoryResponse extends Response
{
}
