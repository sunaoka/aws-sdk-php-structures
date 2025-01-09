<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HistoryRecord> $HistoryRecords
 * @property \Aws\Api\DateTimeResult $LastEvaluatedTime
 * @property string $NextToken
 * @property string $SpotFleetRequestId
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeSpotFleetRequestHistoryResponse extends Response
{
}
